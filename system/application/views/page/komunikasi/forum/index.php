<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title><?=$title?> | Sistem e-SOP Kementerian Sekretariat Negara</title>
  <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?=base_url()?>assets/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?=base_url()?>assets/global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/vendor/select2/select2.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/vendor/bootstrap-markdown/bootstrap-markdown.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/vendor/bootstrap-select/bootstrap-select.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/examples/css/apps/forum.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?=base_url()?>assets/global/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <link rel="stylesheet" href="<?=base_url()?>assets/css/reset.css">
  <!--[if lt IE 9]>
    <script src="<?=base_url()?>assets/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="<?=base_url()?>assets/global/vendor/media-match/media.match.min.js"></script>
    <script src="<?=base_url()?>assets/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?=base_url()?>assets/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="animsition site-navbar-small app-forum page-aside-left">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
   <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
  role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <a class="navbar-brand navbar-brand-center" href="<?=base_url()?>dashboard">
        <img class="navbar-brand-logo navbar-brand-logo-normal" src="<?=base_url()?>assets/images/logo.png" title="Sistem e-SOP Sekretariat Negara">
        <img class="navbar-brand-logo navbar-brand-logo-special" src="<?=base_url()?>assets/images/logo-blue.png" title="Sistem e-SOP Sekretariat Negara">
        <span class="navbar-brand-text hidden-xs-down"> Sistem e-SOP Kementerian Sekretariat Negara</span>
      </a>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
    </div>
    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="nav-item hidden-float" id="toggleMenubar">
            <a class="nav-link" data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->
        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="nav-item hidden-sm-down" id="toggleFullscreen">
            <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="nav-item hidden-float">
            <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
            role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
		  <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Pemberitahuan"
            aria-expanded="false" data-animation="scale-up" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <?=($notif->num_rows() > 0 ? '<span class="badge badge-pill badge-danger up">'.$notif->num_rows().'</span>' : '')?>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>Pemberitahuan</h5>
				<?=($notif->num_rows() > 0 ? '<span class="badge badge-round badge-danger">New '.$notif->num_rows().'</span>' : '')?>
              </li>
              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
				  <?php if($notif->num_rows() > 0){
					  foreach($notif->result_array() as $row){
						$linkgrup = ($groupid == 11 ? 'periksa' : 'lihat');
						$link = ($row['notif_jenis'] == 'reviu' ? ''.base_url().'sop/reviu/'.$linkgrup.'/'.$row['sop_alias'].'/'.$row['notif_id'].'/'.$row['reviu_id'].'' : ''.base_url().'sop/revisi_sop/periksa/'.$row['sop_alias'].'/'.$row['revisi_id'].'');
				  ?>
						<a class="list-group-item" href="<?=$link?>" role="menuitem">
						  <div class="media">
							<div class="pr-10">
							  <i class="icon <?=$row['notif_icon']?> white icon-circle" aria-hidden="true"></i>
							</div>
							<div class="media-body">
							  <h6 class="media-heading"><?=$row['notif_title']?></h6>
							  <!--<time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5 hours ago</time>-->
							</div>
						  </div>
						</a>
				  <?php }}else{ ?>
				  <a class="list-group-item" href="#" role="menuitem">
                      <div class="media">
                        <div class="media-body">
                          <h6 class="media-heading">Tidak ada pemberitahuan</h6>
                        </div>
                      </div>
                    </a>
				  <?php }?>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-item" href="<?=base_url()?>notification/semua" role="menuitem">
                    Lihat Semua
                  </a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
				<img src="<?=base_url()?>assets<?=($foto != '' ? '/media/profile/'.$foto.'' : '/global/portraits/5.jpg')?>" alt="<?=$fullname?>">
                <i></i>
              </span>
            </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?=base_url()?>logout" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
            </div>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu" data-plugin="menu">
			<?php 
				if($menu->num_rows() > 0){
					foreach($menu->result_array() as $rows) {
						$level = $rows['menu_level'];
						$this->menubackend->addToArray($rows['menu_id'], $rows['menu_name'], $rows['parent'], $rows['menu_link'], $level, $rows['menu_sts_child'], $rows['menu_icon']);
					}
					
					$this->menubackend->drawTree(); 
				}
			?>
				
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="page bg-white">
    <!-- Forum Sidebar -->
    <div class="page-aside">
      <div class="page-aside-switch">
        <i class="icon wb-chevron-left" aria-hidden="true"></i>
        <i class="icon wb-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="page-aside-inner page-aside-scroll">
        <div data-role="container">
          <div data-role="content">
            <section class="page-aside-section">
              <h5 class="page-aside-title">Introduction</h5>
              <div class="list-group">
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-emoticon" aria-hidden="true"></i>
                  <span class="list-group-item-content">Welcome</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-bell" aria-hidden="true"></i>
                  <span class="list-group-item-content">News</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-clipboard" aria-hidden="true"></i>
                  <span class="list-group-item-content">General Discussion</span>
                </a>
              </div>
            </section>
            <section class="page-aside-section">
              <h5 class="page-aside-title">Web Application</h5>
              <div class="list-group">
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                  <span class="list-group-item-content">Installation</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-library" aria-hidden="true"></i>
                  <span class="list-group-item-content">Configuration</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-extension" aria-hidden="true"></i>
                  <span class="list-group-item-content">Plugins</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-memory" aria-hidden="true"></i>
                  <span class="list-group-item-content">Themes</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-file" aria-hidden="true"></i>
                  <span class="list-group-item-content">Troubleshooting/Help</span>
                </a>
              </div>
            </section>
            <section class="page-aside-section">
              <h5 class="page-aside-title">Developer’s Resources</h5>
              <div class="list-group">
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-extension" aria-hidden="true"></i>
                  <span class="list-group-item-content">Feature Requests</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-memory" aria-hidden="true"></i>
                  <span class="list-group-item-content">Technical Support</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon wb-file" aria-hidden="true"></i>
                  <span class="list-group-item-content">Code Review</span>
                </a>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- Forum Content -->
    <div class="page-main">
      <!-- Forum Content Header -->
      <div class="page-header">
        <form class="mt-20" action="#" role="search">
          <div class="input-search input-search-dark">
            <input type="text" class="form-control w-full" placeholder="Search..." name="">
            <button type="submit" class="input-search-btn">
              <i class="icon wb-search" aria-hidden="true"></i>
            </button>
          </div>
        </form>
      </div>
      <!-- Forum Nav -->
      <div class="page-nav-tabs">
        <ul class="nav nav-tabs nav-tabs-line" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="active nav-link" data-toggle="tab" href="#forum-newest" aria-controls="forum-newest"
            aria-expanded="true" role="tab">Newest</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" data-toggle="tab" href="#forum-activity" aria-controls="forum-activity"
            aria-expanded="false" role="tab">Activity</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" data-toggle="tab" href="#forum-answer" aria-controls="forum-answer"
            aria-expanded="false" role="tab">Answer</a>
          </li>
        </ul>
      </div>
      <!-- Forum Content -->
      <div class="page-content tab-content page-content-table nav-tabs-animate">
        <div class="tab-pane animation-fade active" id="forum-newest" role="tabpanel">
          <table class="table is-indent">
            <tbody>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/1.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Vicinum at aperta, torquem mox doloris illi, officiis.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Herman Beck</span>
                      <span class="started">1 day ago</span>
                      <span class="tags">Themes</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">1</span>
                  <span class="unit">Post</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/2.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Moribus ibidem angore, iudiciorumque careret causa verbis aliena.
                      <div class="flags responsive-hide">
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Mary Adams</span>
                      <span class="started">2 days ago</span>
                      <span class="tags">Configuration</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">2</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/3.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Sinat ut miseram voluptatibus compositis quodsi. Quem afflueret.
                      <div class="flags responsive-hide">
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Caleb Richards</span>
                      <span class="started">3 days ago</span>
                      <span class="tags">Installation</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">3</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/4.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Graeca modice video patre iuste tradidisse molestiae molestia.
                      <div class="flags responsive-hide">
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By June Lane</span>
                      <span class="started">4 days ago</span>
                      <span class="tags">Announcements</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">4</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/5.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Autem omnes is protervi fortitudinis maerores, geometrica statuat.
                      <div class="flags responsive-hide">
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Edward Fletcher</span>
                      <span class="started">5 days ago</span>
                      <span class="tags">Development</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">5</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/6.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Tuemur geometrica angore haeret rogatiuncula albuci meo etiam.
                      <div class="flags responsive-hide">
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Crystal Bates</span>
                      <span class="started">6 days ago</span>
                      <span class="tags">Plugins</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">6</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/7.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Caret adoptionem tollitur, agam dixeris respondendum fortunae familias.
                      <div class="flags responsive-hide">
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Nathan Watts</span>
                      <span class="started">7 days ago</span>
                      <span class="tags">Technical Support</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">7</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/8.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Una veniamus fruentem firmam, explicari laboramus futuris miser.
                      <div class="flags responsive-hide">
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Heather Harper</span>
                      <span class="started">8 days ago</span>
                      <span class="tags">Code Review</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">8</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/9.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Aristippus dicantur verterem molestiam tali appetendum. Maximis potest.
                      <div class="flags responsive-hide">
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Willard Wood</span>
                      <span class="started">9 days ago</span>
                      <span class="tags">Responses</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">9</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/10.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Hac ipsa sit, facile liberiusque ipse frustra multo.
                      <div class="flags responsive-hide">
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Ronnie Ellis</span>
                      <span class="started">10 days ago</span>
                      <span class="tags">Package</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">10</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
            </tbody>
          </table>
          <ul class="pagination pagination-gap">
            <li class="disabled page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
            <li class="active page-item"><a class="page-link" href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
          </ul>
        </div>
        <div class="tab-pane animation-fade" id="forum-activity" role="tabpanel">
          <table class="table is-indent">
            <tbody>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/11.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Repellere summo tritani uterque nullo sollicitudines. Frui lectorem.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Gwendolyn Wheeler</span>
                      <span class="started">1 day ago</span>
                      <span class="tags">Technical Support</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">1</span>
                  <span class="unit">Post</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/12.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Malarum beate spe consilia fabulae, intervalla verbum falso.
                      <div class="flags responsive-hide">
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Daniel Russell</span>
                      <span class="started">2 days ago</span>
                      <span class="tags">Plugins</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">2</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/13.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Nomini libris ergo errorem solido sitne oratio, mediocriterne.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Sarah Graves</span>
                      <span class="started">3 days ago</span>
                      <span class="tags">Announcements</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">3</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/14.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Terrore ennius, sumitur tum provincia quae probatum fingi.
                      <div class="flags responsive-hide">
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Andrew Hoffman</span>
                      <span class="started">4 days ago</span>
                      <span class="tags">Installation</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">4</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/15.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Statua iucundius brevis beatam finitas suscipit ipsis incursione.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Camila Lynch</span>
                      <span class="started">5 days ago</span>
                      <span class="tags">Configuration</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">5</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/16.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Laus optime turbulenta carere cotidie deduceret aequo metuamus.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Ramon Dunn</span>
                      <span class="started">6 days ago</span>
                      <span class="tags">Feature Requests</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">6</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/17.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Efficit accusantium voluit quales, legere inmensae. Pariuntur privamur.
                      <div class="flags responsive-hide">
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Scott Sanders</span>
                      <span class="started">7 days ago</span>
                      <span class="tags">Troubleshooting</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">7</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
            </tbody>
          </table>
          <ul class="pagination pagination-gap">
            <li class="disabled page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
            <li class="active page-item"><a class="page-link" href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
          </ul>
        </div>
        <div class="tab-pane animation-fade" id="forum-answer" role="tabpanel">
          <table class="table is-indent">
            <tbody>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/2.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Augeri, sanos simulent atomi habet ullo consuetudine saepti.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Mary Adams</span>
                      <span class="started">1 day ago</span>
                      <span class="tags">Plugins</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">1</span>
                  <span class="unit">Post</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/3.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Odioque denique teneam animis putem torquentur retinere sermone.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Caleb Richards</span>
                      <span class="started">2 days ago</span>
                      <span class="tags">Technical Support</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">2</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/4.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Diligenter accessio meque difficile propemodum posuit momenti impetu.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By June Lane</span>
                      <span class="started">3 days ago</span>
                      <span class="tags">Code Review</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">3</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/5.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Terrore ennius, sumitur tum provincia quae probatum fingi.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Edward Fletcher</span>
                      <span class="started">4 days ago</span>
                      <span class="tags">Troubleshooting</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">4</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/6.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Habere nati sponte dum pericula exorsus sciscat fructuosam.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Crystal Bates</span>
                      <span class="started">5 days ago</span>
                      <span class="tags">Configuration</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">5</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/7.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Nutu fugiendus, accusata utamur iniucundus captet quippe virtutum.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Nathan Watts</span>
                      <span class="started">6 days ago</span>
                      <span class="tags">Announcements</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">6</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-fluid" src="<?=base_url()?>assets/global/portraits/8.jpg" alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Parvos labore efficeret, liber timorem tarentinis accedis praebeat.
                      <div class="flags responsive-hide">
                        <span class="sticky-top badge badge-round badge-danger"><i class="icon wb-dropup" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon wb-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Heather Harper</span>
                      <span class="started">7 days ago</span>
                      <span class="tags">Themes</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">7</span>
                  <span class="unit">Posts</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
            </tbody>
          </table>
          <ul class="pagination pagination-gap">
            <li class="disabled page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
            <li class="active page-item"><a class="page-link" href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <button class="site-action btn-raised btn btn-success btn-floating" data-target="#addTopicForm"
  data-toggle="modal" type="button">
    <i class="icon wb-pencil" aria-hidden="true"></i>
  </button>
  <!-- Add Topic Form -->
  <div class="modal fade" id="addTopicForm" aria-hidden="true" aria-labelledby="addTopicForm"
  role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Create New Topic</h4>
        </div>
        <div class="modal-body container-fluid">
          <form>
            <div class="form-group">
              <label class="form-control-label mb-15" for="topicTitle">Topic Title:</label>
              <input type="text" class="form-control" id="topicTitle" name="title" placeholder="How To..."
              />
            </div>
            <div class="form-group">
              <textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="10"></textarea>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-6">
                  <label class="form-control-label mb-15" for="topicCategory">Topic Category:</label>
                  <select id="topicCategory" data-plugin="selectpicker">
                    <option>PHP</option>
                    <option>Javascript</option>
                    <option>HTML</option>
                    <option>CSS</option>
                    <option>Ruby</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-control-label mb-15" for="topic_tags">Topic Tags:</label>
                  <select id="topic_tags" data-plugin="selectpicker">
                    <option>PHP</option>
                    <option>Javascript</option>
                    <option>HTML</option>
                    <option>CSS</option>
                    <option>Ruby</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer text-left">
          <button class="btn btn-primary" data-dismiss="modal" type="submit">Create</button>
          <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add Topic Form -->
  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">&copy; 2017 Sekretariat Negara</div>
    <div class="site-footer-right">
     <a href="http://www.jake.co.id" target="_blank">Jake Id</a>
    </div>
  </footer>
  <!-- Core  -->
  <script src="<?=base_url()?>assets/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/jquery/jquery.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/tether/tether.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/animsition/animsition.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/asscrollable/jquery-asScrollable.js"></script>
  <!-- Plugins -->
  <script src="<?=base_url()?>assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/intro-js/intro.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/screenfull/screenfull.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/bootstrap-markdown/bootstrap-markdown.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/bootstrap-select/bootstrap-select.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/marked/marked.js"></script>
  <script src="<?=base_url()?>assets/global/vendor/to-markdown/to-markdown.js"></script>
  <!-- Scripts -->
  <script src="<?=base_url()?>assets/global/js/State.js"></script>
  <script src="<?=base_url()?>assets/global/js/Component.js"></script>
  <script src="<?=base_url()?>assets/global/js/Plugin.js"></script>
  <script src="<?=base_url()?>assets/global/js/Base.js"></script>
  <script src="<?=base_url()?>assets/global/js/Config.js"></script>
  <script src="<?=base_url()?>assets/js/Section/Menubar.js"></script>
  <script src="<?=base_url()?>assets/js/Section/Sidebar.js"></script>
  <script src="<?=base_url()?>assets/js/Section/PageAside.js"></script>
  <script src="<?=base_url()?>assets/js/Plugin/menu.js"></script>
  <!-- Config -->
  <script src="<?=base_url()?>assets/global/js/config/colors.js"></script>
  <script src="<?=base_url()?>assets/js/config/tour.js"></script>
  <script>
  Config.set('assets', '<?=base_url()?>assets');
  </script>
  <!-- Page -->
  <script src="<?=base_url()?>assets/js/Site.js"></script>
  <script src="<?=base_url()?>assets/global/js/Plugin/asscrollable.js"></script>
  <script src="<?=base_url()?>assets/global/js/Plugin/slidepanel.js"></script>
  <script src="<?=base_url()?>assets/global/js/Plugin/switchery.js"></script>
  <script src="<?=base_url()?>assets/global/js/Plugin/bootstrap-select.js"></script>
  <script src="<?=base_url()?>assets/js/BaseApp.js"></script>
  <script src="<?=base_url()?>assets/js/App/Forum.js"></script>
  <script src="<?=base_url()?>assets/examples/js/apps/forum.js"></script>
</body>
</html>