@csrf 
<label for="">Titulo del Proyecto <br> <input type="text" name="title" placeholder="Escribe un titulo" value="{{old('title', $project->title)}}"></label> <br>
<label for="">URL <br> <input type="text" name="url" placeholder="Escribe una url" value="{{old('url', $project->url)}}"></label> <br>
<label for="">Descripcion del Proyecto <br> <textarea name="description">{{old('description', $project->description)}}</textarea></label>  <br>

<button>{{$btnText}}</button>