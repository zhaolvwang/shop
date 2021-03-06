@extends('member.member')

@section('content')
<div class="member-tab">
						<span><a href="{{ url('member/account/index') }}">帐户信息<i></i></a></span>
						<span class="line-ver"></span>
						<span class="current"><a href="{{ url('member/account/integration') }}">我的积分<i></i></a></span>
						<span class="line-ver"></span>
						<span><a href="{{ url('member/account/security') }}">帐户安全<i></i></a></span>
					</div>
					<div class="mt10 mb10">
						<span class="color-666">当前积分：<font class="color-orange font-s-18 yahei">50.0</font>（10 积分等于 1 元）</span>
					</div>
					<table width="100%" border="0" cellspacing="0" cellspadding="0" class="member-data-table resource-table">
						<tr>
							<td align="center" valign="middle" width="15%">创建日期</td>
							<td align="left" valign="middle" width="30%">操作日志</td>
							<td align="center" valign="middle" width="15%">收入</td>
							<td align="center" valign="middle" width="15%">支出</td>
							<td align="center" valign="middle" width="15%">支出</td>
						</tr>
						<!-- 没有数据时显示
							<div class="member-data-none">
								暂无匹配数据
							</div>
						 -->
						 <tr>
							<td align="center" valign="middle" width="15%">2015-9-2 10:25:47</td>
							<td align="left" valign="middle" width="30%">积分规则任务每日登录成功.获取积分数5.0</td>
							<td align="center" valign="middle" width="15%">5</td>
							<td align="center" valign="middle" width="15%">-</td>
							<td align="center" valign="middle" width="15%">45</td>
						</tr>
						<tr>
							<td align="center" valign="middle" width="15%">2015-9-2 10:25:47</td>
							<td align="left" valign="middle" width="30%">积分规则任务每日登录成功.获取积分数5.0</td>
							<td align="center" valign="middle" width="15%">5</td>
							<td align="center" valign="middle" width="15%">-</td>
							<td align="center" valign="middle" width="15%">45</td>
						</tr>
						<tr>
							<td align="center" valign="middle" width="15%">2015-9-2 10:25:47</td>
							<td align="left" valign="middle" width="30%">积分规则任务每日登录成功.获取积分数5.0</td>
							<td align="center" valign="middle" width="15%">5</td>
							<td align="center" valign="middle" width="15%">-</td>
							<td align="center" valign="middle" width="15%">45</td>
						</tr>
						<tr>
							<td align="center" valign="middle" width="15%">2015-9-2 10:25:47</td>
							<td align="left" valign="middle" width="30%">积分规则任务每日登录成功.获取积分数5.0</td>
							<td align="center" valign="middle" width="15%">5</td>
							<td align="center" valign="middle" width="15%">-</td>
							<td align="center" valign="middle" width="15%">45</td>
						</tr>
						<tr>
							<td align="center" valign="middle" width="15%">2015-9-2 10:25:47</td>
							<td align="left" valign="middle" width="30%">积分规则任务每日登录成功.获取积分数5.0</td>
							<td align="center" valign="middle" width="15%">5</td>
							<td align="center" valign="middle" width="15%">-</td>
							<td align="center" valign="middle" width="15%">45</td>
						</tr>
						<tr>
							<td align="center" valign="middle" width="15%">2015-9-2 10:25:47</td>
							<td align="left" valign="middle" width="30%">积分规则任务每日登录成功.获取积分数5.0</td>
							<td align="center" valign="middle" width="15%">5</td>
							<td align="center" valign="middle" width="15%">-</td>
							<td align="center" valign="middle" width="15%">45</td>
						</tr>
						<tr>
							<td align="center" valign="middle" width="15%">2015-9-2 10:25:47</td>
							<td align="left" valign="middle" width="30%">积分规则任务每日登录成功.获取积分数5.0</td>
							<td align="center" valign="middle" width="15%">5</td>
							<td align="center" valign="middle" width="15%">-</td>
							<td align="center" valign="middle" width="15%">45</td>
						</tr>
						<tr>
							<td align="center" valign="middle" width="15%">2015-9-2 10:25:47</td>
							<td align="left" valign="middle" width="30%">积分规则任务每日登录成功.获取积分数5.0</td>
							<td align="center" valign="middle" width="15%">5</td>
							<td align="center" valign="middle" width="15%">-</td>
							<td align="center" valign="middle" width="15%">45</td>
						</tr>
						<tr>
							<td align="center" valign="middle" width="15%">2015-9-2 10:25:47</td>
							<td align="left" valign="middle" width="30%">积分规则任务每日登录成功.获取积分数5.0</td>
							<td align="center" valign="middle" width="15%">5</td>
							<td align="center" valign="middle" width="15%">-</td>
							<td align="center" valign="middle" width="15%">45</td>
						</tr>
						<tr>
							<td align="center" valign="middle" width="15%">2015-9-2 10:25:47</td>
							<td align="left" valign="middle" width="30%">积分规则任务每日登录成功.获取积分数5.0</td>
							<td align="center" valign="middle" width="15%">5</td>
							<td align="center" valign="middle" width="15%">-</td>
							<td align="center" valign="middle" width="15%">45</td>
						</tr>
					</table>
					<div class="yeehim-pager mt40 mb40 clearfix">
						<ul>
							<li class="prev"><span>上一页</span></li>
							<li class="current"><span>1</span></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li class="next"><a href="">下一页</a></li>
						</ul>
					</div>
					<script type="text/javascript">
						$(".member-data-table tr:eq(0)").addClass("bg");
						$(".member-data-table tr:not(:first)").hover(function(){
							$(this).addClass("hover");
						},function(){
							$(this).removeClass("hover");
						});
					</script>
@stop
