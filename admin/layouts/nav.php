<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/posts">Post Feed</a>
  </div>
  <ul class="nav navbar-right top-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="fa fa-fw fa-user"></i> Profile</a></li>
        <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li><a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
      <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i>Posts<i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="demo1" class="collapse">
          <li><a href="/admin/posts">View all posts</a></li>
          <li><a href="/admin/posts/new">Add new post</a></li>
        </ul>
      </li>
      <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-arrows-v"></i>Users<i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="users" class="collapse">
          <li><a href="/admin/users">View all users</a></li>
          <li><a href="/admin/users/new">Add new post</a></li>
        </ul>
      </li>
      <li><a href="/admin/comments"><i class="fa fa-fw fa-file"></i> Comments</a></li>
      <li><a href="/admin/categories"><i class="fa fa-fw fa-wrench"></i> Categories</a></li>
      <li><a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Profile</a></li>
    </ul>
  </div>
</nav>