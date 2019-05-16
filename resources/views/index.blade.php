<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>برنامج كفالة - الصفحة الرئيسية</title>
	<meta name="description" content="برنامج كفالة لدعم المستفيدين" />
	<meta name="keywords" content="كفالة" />
	<meta name="author" content="AamalOrg"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Morris Charts CSS -->
	<link href="{{ asset('vendors/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css"/>

	<!-- Data table CSS -->
	<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}"  rel="stylesheet" type="text/css"/>

	<link href="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}"  rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="{{ asset('dist/css/style.css') }}"  rel="stylesheet" type="text/css">
	<link href="{{ asset('style.css') }}"  rel="stylesheet" type="text/css">

</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
	<div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper theme-1-active pimary-color-green">
	<!-- Top Menu Items -->
@include('layouts.nav')
	<!-- /Top Menu Items -->

	<!-- Left Sidebar Menu -->
@include('layouts.aside')
	<!-- /Left Sidebar Menu -->

	<!-- Right Sidebar Menu -->
	<div class="fixed-sidebar-right">
		<ul class="right-sidebar">
			<li>
				<div  class="tab-struct custom-tab-1">
					<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
						<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
						<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
						<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
					</ul>
					<div class="tab-content" id="right_sidebar_content">
						<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
							<div class="chat-cmplt-wrap">
								<div class="chat-box-wrap">
									<div class="add-friend">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>
										<span class="inline-block txt-dark">users</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
										<div class="clearfix"></div>
									</div>
									<form role="search" class="chat-search pl-15 pr-15 pb-15">
										<div class="input-group">
											<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
											<span class="input-group-btn">
												<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
												</span>
										</div>
									</form>
									<div id="chat_list_scroll">
										<div class="nicescroll-bar">
											<ul class="chat-list-wrap">
												<li class="chat-list">
													<div class="chat-body">
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="{{ asset('/img/user.png') }}" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Clay Masse</span>
																	<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
																</div>
																<div class="status away"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="{{ asset('/img/user1.png') }}" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Evie Ono</span>
																	<span class="time block truncate txt-grey">Unity is strength</span>
																</div>
																<div class="status offline"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="{{ asset('/img/user2.png') }}" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Madalyn Rascon</span>
																	<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="{{ asset('/img/user3.png') }}" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Mitsuko Heid</span>
																	<span class="time block truncate txt-grey">I’m thankful.</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="{{ asset('/img/user.png') }}" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Ezequiel Merideth</span>
																	<span class="time block truncate txt-grey">Patience is bitter.</span>
																</div>
																<div class="status offline"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="{{ asset('/img/user1.png') }}" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Jonnie Metoyer</span>
																	<span class="time block truncate txt-grey">Genius is eternal patience.</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="{{ asset('/img/user2.png') }}" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Angelic Lauver</span>
																	<span class="time block truncate txt-grey">Every burden is a blessing.</span>
																</div>
																<div class="status away"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="{{ asset('/img/user3.png') }}" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Priscila Shy</span>
																	<span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="{{ asset('/img/user4.png') }}" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Linda Stack</span>
																	<span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
																</div>
																<div class="status away"></div>
																<div class="clearfix"></div>
															</div>
														</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="recent-chat-box-wrap">
									<div class="recent-chat-wrap">
										<div class="panel-heading ma-0">
											<div class="goto-back">
												<a  id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
													<i class="zmdi zmdi-chevron-left"></i>
												</a>
												<span class="inline-block txt-dark">ryan</span>
												<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="panel-wrapper collapse in">
											<div class="panel-body pa-0">
												<div class="chat-content">
													<ul class="nicescroll-bar pt-20">
														<li class="friend">
															<div class="friend-msg-wrap">
																<img class="user-img img-circle block pull-left"  src="{{ asset('/img/user.png') }}" alt="user"/>
																<div class="msg pull-left">
																	<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																	<div class="msg-per-detail text-right">
																		<span class="msg-time txt-grey">2:30 PM</span>
																	</div>
																</div>
																<div class="clearfix"></div>
															</div>
														</li>
														<li class="self mb-10">
															<div class="self-msg-wrap">
																<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																	<div class="msg-per-detail text-right">
																		<span class="msg-time txt-grey">2:31 pm</span>
																	</div>
																</div>
																<div class="clearfix"></div>
															</div>
														</li>
														<li class="self">
															<div class="self-msg-wrap">
																<div class="msg block pull-right">  How about you?
																	<div class="msg-per-detail text-right">
																		<span class="msg-time txt-grey">2:31 pm</span>
																	</div>
																</div>
																<div class="clearfix"></div>
															</div>
														</li>
														<li class="friend">
															<div class="friend-msg-wrap">
																<img class="user-img img-circle block pull-left"  src="{{ asset('/img/user.png') }}" alt="user"/>
																<div class="msg pull-left">
																	<p>Not too bad.</p>
																	<div class="msg-per-detail  text-right">
																		<span class="msg-time txt-grey">2:35 pm</span>
																	</div>
																</div>
																<div class="clearfix"></div>
															</div>
														</li>
													</ul>
												</div>
												<div class="input-group">
													<input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
													<div class="input-group-btn emojis">
														<div class="dropup">
															<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="javascript:void(0)">Action</a></li>
																<li><a href="javascript:void(0)">Another action</a></li>
																<li class="divider"></li>
																<li><a href="javascript:void(0)">Separated link</a></li>
															</ul>
														</div>
													</div>
													<div class="input-group-btn attachment">
														<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
															<input type="file" class="upload">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="messages_tab" class="tab-pane fade" role="tabpanel">
							<div class="message-box-wrap">
								<div class="msg-search">
									<a href="javascript:void(0)" class="inline-block txt-grey">
										<i class="zmdi zmdi-more"></i>
									</a>
									<span class="inline-block txt-dark">messages</span>
									<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
									<div class="clearfix"></div>
								</div>
								<div class="set-height-wrap">
									<div class="streamline message-box nicescroll-bar">
										<a href="javascript:void(0)">
											<div class="sl-item unread-message">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="{{ asset('/img/user.png') }}" alt="avatar"/>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
													<span class="inline-block font-11  pull-right message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="{{ asset('/img/user1.png') }}" alt="avatar"/>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
													<span class="inline-block font-11  pull-right message-time">1 Feb</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Pogody theme support</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="{{ asset('/img/user2.png') }}" alt="avatar"/>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
													<span class="inline-block font-11  pull-right message-time">31 Jan</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Congratulations from design nominees</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item unread-message">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="{{ asset('/img/user3.png') }}" alt="avatar"/>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
													<span class="inline-block font-11  pull-right message-time">29 Jan</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Themeforest item support message</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item unread-message">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="{{ asset('/img/user4.png') }}" alt="avatar"/>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
													<span class="inline-block font-11  pull-right message-time">27 Jan</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Help with beavis contact form</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="{{ asset('/img/user.png') }}" alt="avatar"/>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
													<span class="inline-block font-11  pull-right message-time">19 Jan</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Your uploaded theme is been selected</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="{{ asset('/img/user1.png') }}" alt="avatar"/>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
													<span class="inline-block font-11  pull-right message-time">13 Jan</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject"> A new rating has been received</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div  id="todo_tab" class="tab-pane fade" role="tabpanel">
							<div class="todo-box-wrap">
								<div class="add-todo">
									<a href="javascript:void(0)" class="inline-block txt-grey">
										<i class="zmdi zmdi-more"></i>
									</a>
									<span class="inline-block txt-dark">todo list</span>
									<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
									<div class="clearfix"></div>
								</div>
								<div class="set-height-wrap">
									<!-- Todo-List -->
									<ul class="todo-list nicescroll-bar">
										<li class="todo-item">
											<div class="checkbox checkbox-default">
												<input type="checkbox" id="checkbox01"/>
												<label for="checkbox01">Record The First Episode</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr"/>
										</li>
										<li class="todo-item">
											<div class="checkbox checkbox-pink">
												<input type="checkbox" id="checkbox02"/>
												<label for="checkbox02">Prepare The Conference Schedule</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr"/>
										</li>
										<li class="todo-item">
											<div class="checkbox checkbox-warning">
												<input type="checkbox" id="checkbox03" checked/>
												<label for="checkbox03">Decide The Live Discussion Time</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr"/>
										</li>
										<li class="todo-item">
											<div class="checkbox checkbox-success">
												<input type="checkbox" id="checkbox04" checked/>
												<label for="checkbox04">Prepare For The Next Project</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr"/>
										</li>
										<li class="todo-item">
											<div class="checkbox checkbox-danger">
												<input type="checkbox" id="checkbox05" checked/>
												<label for="checkbox05">Finish Up AngularJs Tutorial</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr"/>
										</li>
										<li class="todo-item">
											<div class="checkbox checkbox-purple">
												<input type="checkbox" id="checkbox06" checked/>
												<label for="checkbox06">Finish Infinity Project</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr"/>
										</li>
									</ul>
									<!-- /Todo-List -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<!-- /Right Sidebar Menu -->

	<!-- Right Setting Menu -->
	<div class="setting-panel">
		<ul class="right-sidebar nicescroll-bar pa-0">
			<li class="layout-switcher-wrap">
				<ul>
					<li>
						<span class="layout-title">Scrollable header</span>
						<span class="layout-switcher">
								<input type="checkbox" id="switch_3" class="js-switch"  data-color="#2ecd99" data-secondary-color="#dedede" data-size="small"/>
							</span>
						<h6 class="mt-30 mb-15">Theme colors</h6>
						<ul class="theme-option-wrap">
							<li id="theme-1" class="active-theme"><i class="zmdi zmdi-check"></i></li>
							<li id="theme-2"><i class="zmdi zmdi-check"></i></li>
							<li id="theme-3"><i class="zmdi zmdi-check"></i></li>
							<li id="theme-4"><i class="zmdi zmdi-check"></i></li>
							<li id="theme-5"><i class="zmdi zmdi-check"></i></li>
							<li id="theme-6"><i class="zmdi zmdi-check"></i></li>
						</ul>
						<h6 class="mt-30 mb-15">Primary colors</h6>
						<div class="radio mb-5">
							<input type="radio" name="radio-primary-color" id="pimary-color-green" checked value="pimary-color-green">
							<label for="pimary-color-green"> Green </label>
						</div>
						<div class="radio mb-5">
							<input type="radio" name="radio-primary-color" id="pimary-color-red" value="pimary-color-red">
							<label for="pimary-color-red"> Red </label>
						</div>
						<div class="radio mb-5">
							<input type="radio" name="radio-primary-color" id="pimary-color-blue" value="pimary-color-blue">
							<label for="pimary-color-blue"> Blue </label>
						</div>
						<div class="radio mb-5">
							<input type="radio" name="radio-primary-color" id="pimary-color-yellow" value="pimary-color-yellow">
							<label for="pimary-color-yellow"> Yellow </label>
						</div>
						<div class="radio mb-5">
							<input type="radio" name="radio-primary-color" id="pimary-color-pink" value="pimary-color-pink">
							<label for="pimary-color-pink"> Pink </label>
						</div>
						<div class="radio mb-5">
							<input type="radio" name="radio-primary-color" id="pimary-color-orange" value="pimary-color-orange">
							<label for="pimary-color-orange"> Orange </label>
						</div>
						<div class="radio mb-5">
							<input type="radio" name="radio-primary-color" id="pimary-color-gold" value="pimary-color-gold">
							<label for="pimary-color-gold"> Gold </label>
						</div>
						<div class="radio mb-35">
							<input type="radio" name="radio-primary-color" id="pimary-color-silver" value="pimary-color-silver">
							<label for="pimary-color-silver"> Silver </label>
						</div>
						<button id="reset_setting" class="btn  btn-success btn-xs btn-outline btn-rounded mb-10">reset</button>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<button id="setting_panel_btn" class="btn btn-success btn-circle setting-panel-btn shadow-2dp"><i class="zmdi zmdi-settings"></i></button>
	<!-- /Right Setting Menu -->

	<!-- Right Sidebar Backdrop -->
	<div class="right-sidebar-backdrop"></div>
	<!-- /Right Sidebar Backdrop -->

	<!-- Main Content -->
	<div class="page-wrapper">
		<div class="container-fluid pt-25">
			<!-- Row -->
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="panel panel-default card-view pa-0">
						<div class="panel-wrapper collapse in">
							<div class="panel-body pa-0">
								<div class="sm-data-box">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
												<span class="txt-dark block counter"><span class="counter-anim">914,001</span></span>
												<span class="weight-500 uppercase-font block font-13">رصيد المحفظة الافتتاحي</span>
											</div>
											<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
												<i class="icon-user-following data-right-rep-icon txt-light-grey"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="panel panel-default card-view pa-0">
						<div class="panel-wrapper collapse in">
							<div class="panel-body pa-0">
								<div class="sm-data-box">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
												<span class="txt-dark block counter"><span class="counter-anim">46.41</span>%</span>
												<span class="weight-500 uppercase-font block">ارباح الاقراض</span>
											</div>
											<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
												<i class="icon-control-rewind data-right-rep-icon txt-light-grey"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="panel panel-default card-view pa-0">
						<div class="panel-wrapper collapse in">
							<div class="panel-body pa-0">
								<div class="sm-data-box">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
												<span class="txt-dark block counter"><span class="counter-anim">4,054,876</span></span>
												<span class="weight-500 uppercase-font block">ارباح التحصيل</span>
											</div>
											<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
												<i class="icon-layers data-right-rep-icon txt-light-grey"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="panel panel-default card-view pa-0">
						<div class="panel-wrapper collapse in">
							<div class="panel-body pa-0">
								<div class="sm-data-box">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
												<span class="txt-dark block counter"><span class="counter-anim">46.43</span>%</span>
												<span class="weight-500 uppercase-font block">اجمالي الارباح</span>
											</div>
											<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
												<div id="sparkline_4" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Row -->

			<!-- Row -->
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="panel panel-default card-view panel-refresh">
						<div class="refresh-container">
							<div class="la-anim-1"></div>
						</div>
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">احصائيات</h6>
							</div>
							<div class="pull-right">
								<a href="#" class="pull-left inline-block refresh mr-15">
									<i class="zmdi zmdi-replay"></i>
								</a>
								<div class="pull-left inline-block dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div>
									<canvas id="chart_6" height="191"></canvas>
								</div>
								<hr class="light-grey-hr row mt-10 mb-15"/>
								<div class="label-chatrs">
									<div class="">
										<span class="clabels clabels-lg inline-block bg-blue mr-10 pull-left"></span>
										<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">المبالغ المصروفة</span><span class="block txt-grey">145478 ريال</span></span>
										<div id="sparkline_1" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
										<div class="clearfix"></div>
									</div>
								</div>
								<hr class="light-grey-hr row mt-10 mb-15"/>
								<div class="label-chatrs">
									<div class="">
										<span class="clabels clabels-lg inline-block bg-green mr-10 pull-left"></span>
										<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">المبالغ المحصلة</span><span class="block txt-grey">268229 ريال</span></span>
										<div id="sparkline_2" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
										<div class="clearfix"></div>
									</div>
								</div>
								<hr class="light-grey-hr row mt-10 mb-15"/>
								<div class="label-chatrs">
									<div class="">
										<span class="clabels clabels-lg inline-block bg-yellow mr-10 pull-left"></span>
										<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">رصيد المحفظة</span><span class="block txt-grey">40939 ريال</span></span>
										<div id="sparkline_3" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="panel panel-default card-view">
						<div class="panel-wrapper collapse in">
							<div class="panel-body sm-data-box-1">
								<span class="uppercase-font weight-500 font-14 block text-center txt-dark">الرصيد المتبقي</span>
								<div class="cus-sat-stat weight-500 txt-success text-center mt-5">
									<span class="counter-anim">93.13</span><span>%</span>
								</div>
								<div class="progress-anim mt-20">
									<div class="progress">
										<div class="progress-bar progress-bar-success wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<ul class="flex-stat mt-5">
									<li>
										<span class="block">العملاء الاناث</span>
										<span class="block txt-dark weight-500 font-15">79.82</span>
									</li>
									<li>
										<span class="block">العملاء الذكور</span>
										<span class="block txt-dark weight-500 font-15">+14.29</span>
									</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">القروض</h6>
							</div>
							<div class="pull-right">
								<a href="#" class="pull-left inline-block mr-15">
									<i class="zmdi zmdi-download"></i>
								</a>
								<a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
									<i class="zmdi zmdi-close"></i>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div>
										<span class="pull-left inline-block capitalize-font txt-dark">
											نسبة التحصيل من اجمالي الاقراض
										</span>
									<span class="label label-warning pull-right">50%</span>
									<div class="clearfix"></div>
									<hr class="light-grey-hr row mt-10 mb-10"/>
									<span class="pull-left inline-block capitalize-font txt-dark">
											عدد مرات دوران القروض
										</span>
									<span class="label label-danger pull-right">10%</span>
									<div class="clearfix"></div>
									<hr class="light-grey-hr row mt-10 mb-10"/>
									<span class="pull-left inline-block capitalize-font txt-dark">
											نسبة استهلاك اصل المحفظة
										</span>
									<span class="label label-success pull-right">30%</span>
									<div class="clearfix"></div>
									<hr class="light-grey-hr row mt-10 mb-10"/>
									<span class="pull-left inline-block capitalize-font txt-dark">
											نسبة الاستهلاك من اخر دفعه
										</span>
									<span class="label label-primary pull-right">10%</span>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /Row -->

			<!-- Row -->

			<!-- Row -->
		</div>

		<!-- Footer -->
		<footer class="footer container-fluid pl-30 pr-30">
			<div class="row">
				<div class="col-sm-12">
					<p>2019 &copy; كفالة. جميع الحقوق محفوظة </p>
				</div>
			</div>
		</footer>
		<!-- /Footer -->

	</div>
	<!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.j') }}s"></script>

<!-- Data table JavaScript -->
<script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>

<!-- simpleWeather JavaScript -->
<script src="{{ asset('vendors/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('dist/js/simpleweather-data.js') }}"></script>

<!-- Progressbar Animation JavaScript -->
<script src="{{ asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

<!-- Sparkline JavaScript -->
<script src="{{ asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

<!-- Owl JavaScript -->
<script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

<!-- ChartJS JavaScript -->
<script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('vendors/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

<!-- Switchery JavaScript -->
<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('dist/js/init.js') }}"></script>
<script src="{{ asset('dist/js/dashboard-data.js') }}"></script>
</body>


</html>
