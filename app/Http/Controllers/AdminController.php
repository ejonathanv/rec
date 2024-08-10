<?php

namespace App\Http\Controllers;

use Str;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.index', compact('posts'));
    }

    public function pdfArticles()
    {
        $articles = Post::latest()->where('type', 'pdf')->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function pdfArticlesShow(Post $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    public function pdfArticlesCreate(){
        return view('admin.articles.create');
    }

    public function pdfArticlesStore(Request $request){
        $request->validate($this->articleRules(), $this->articleMessages());
        $article = new Post();
        $this->updateArticleData($request, $article);
        return redirect()->route('pdf-articles-show', $article)->with('success', 'El artículo se creó con éxito');
    }

    public function pdfArticlesUpdate(Request $request, Post $article){
        $request->validate($this->articleRules($article), $this->articleMessages());
        $this->updateArticleData($request, $article);
        return redirect()->route('pdf-articles-show', $article)->with('success', 'El artículo se actualizó con éxito');
    }

    public function pdfArticlesDestroy(Post $article)
    {
        $article->delete();
        return redirect()->route('pdf-articles')->with('success', 'El artículo se eliminó con éxito');
    }

    public function articleRules($article = null){
        $rules = [
            'title' => 'required|unique:posts,title,' . ($article ? $article->id : '') . '|max:255',
            'pdf' => 'nullable|mimes:pdf|max:10000',
            'date' => 'required|date',
            'author' => 'required',
            'resume' => 'required',
            'category' => 'required'
        ];

        return $rules;
    }

    public function articleMessages(){
        $messages = [
            'title.required' => 'El título es obligatorio',
            'title.unique' => 'El título ya existe',
            'pdf.required' => 'El PDF es obligatorio',
            'pdf.mimes' => 'El PDF debe ser formato PDF',
            'pdf.max' => 'El PDF debe pesar menos de 10MB',
            'date.required' => 'La fecha es obligatoria',
            'date.date' => 'La fecha debe ser una fecha válida',
            'author.required' => 'El autor es obligatorio',
            'resume.required' => 'El resumen es obligatorio',
            'category.required' => 'La categoría es obligatoria'
        ];

        return $messages;
    }

    public function updateArticleData(Request $request, Post $article){
        $article->user_id = auth()->user()->id;
        $article->title = $request->title;
        $article->resume = $request->resume;
        $article->content = "";
        $article->slug = Str::slug($request->title);
        $article->status = $request->draft ? 'draft' : 'published';
        $article->author = $request->author;
        $article->type = 'pdf';
        $article->date = $request->date;

        $article->save();

        if($request->has('category')){
            $category = Category::firstOrCreate([
                'name' => $request->category
            ]);
            $article->category_id = $category->id;

            $article->save();
        }

        if($request->has('cover')){
            // We need to upload the $request->cover img and store the image in the public/uploads folder
            $cover = $request->file('cover');
            $coverName = time() . '_' . $cover->getClientOriginalName();
            $cover->move(public_path('uploads'), $coverName);
    
            // We need to update the $post->cover with the new image name
            $article->cover = $coverName;
            $article->save();
        }

        if($request->has('pdf')){
            // We need to upload the $request->pdf pdf and store the pdf in the public/pdfs folder
            $pdf = $request->file('pdf');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('pdfs'), $pdfName);
    
            // We need to update the $article->pdfPath with the new pdf name
            $article->pdfPath = $pdfName;

            $article->save();
        }
    }
}
