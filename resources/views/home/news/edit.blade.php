@extends('home.news.layout')


@section('title',$title)

@section('content')

	<h3>{{$title}}</h3>	

	<form action="/home/news/{{$res->id}}" method='post'>
		<table border='0' width='400' >				
			<tr>
				<td align='right'>标题:</td>
				<td>
					<input type="text" name='title' value="{{$res->title}}">
				</td>
			</tr>
			<tr>
				<td align='right'>关键字:</td>
				<td>
					<input type="text" name='keywords' value="{{$res->keywords}}">
				</td>
			</tr>
			<tr>
				<td align='right'>作者:</td>
				<td>
					<input type="text" name='author' value="{{$res->author}}">
				</td>
			</tr>
			<tr>
				<td align='right'>内容:</td>
				<td>
					<textarea name="content" id="" cols="30" rows="5" style='resize:none'>{{$res->content}}</textarea>
				</td>
			</tr>
			<tr>
				<td colspan='3' align='center'>

					{{ method_field('PUT') }}
					{{csrf_field()}}
					<input type="submit" value='修改' />
					
				</td>
				
			</tr>

		</table>
	</form>
@endsection