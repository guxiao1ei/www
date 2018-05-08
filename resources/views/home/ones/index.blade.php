

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
				<a href="/four/{{$v->id}}">修改</a>
				<a href="/six/{{$v->id}}">删除</a>
			</td>
		</tr>
		@endforeach
	</table>

