@extends('home.news.layout')

@section('title',$title)

@section('content')
	<form action="/home/news" method='post'>
		<table border='0' width='400'> 
			<tr>
				<td align='right'>标题:</td>
				<td><input type="text" name='title'></td>
			</tr>
			<tr>
				<td align='right'>关键字:</td>
				<td><input type="text" name='keywords'></td>
			</tr>
			<tr>
				<td align='right'>作者:</td>
				<td><input type="text" name='author'></td>
			</tr>
			<tr>
				<td align='right'>内容:</td>
				<td><textarea name="content" id="" cols="30" rows="5" width='300px' height='200px' style='resize:none'></textarea></td>
			</tr>
			<tr>
				<td colspan='3' align='center'>
					{{csrf_field()}}
					<input type="submit" value='添加' />
					
				</td>
				
			</tr>

		</table>
	</form>
@endsection