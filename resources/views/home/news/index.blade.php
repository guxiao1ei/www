@extends('home.news.layout')

@section('title','新闻管理系统!!!!')

@section('content')
	<h3>浏览新闻</h3>

	<table border='1' width='980'>
		<tr>
			<th class='ids'>新闻ID</th><th class='cur'>新闻标题</th><th class='cur'>新闻关键字</th><th class='cur'>作者</th><th>新闻内容</th><th class='cur'>新闻日期</th><th class='cur'>操作</th>
		</tr>
		
		
		
		@foreach($res as $k => $v)
		<tr>
			<td>{{$v->id}}</td>
			<td>{{$v->title}}</td>
			<td>{{$v->keywords}}</td>
			<td>{{$v->author}}</td>
			<td>{{$v->content}}</td>
			<td>{{$v->inputtime}}</td>
			<td>
				<a href="/home/news/{{$v->id}}/edit"><button class='btn btn-info'>修改</button></a>
				
				<form action="/home/news/{{$v->id}}" method="POST" style='display:inline'>
				   
				    {{ method_field('DELETE') }}
				    {{csrf_field()}}

				    <button class='btn btn-danger'>删除</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>

	{{$res->links()}}
@endsection