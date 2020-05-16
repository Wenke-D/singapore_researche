<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img class="nav_logo" src="<?php echo _IMG.'logo.png'?>" alt="LOGO"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($curPage=="Executive") echo "active"?>">
                <a class="nav-link" href="<?php echo _LINK.'Executive.php';?>"><?php echo _EXECUTIVE?></a>
            </li>
            <li class="nav-item <?php if($curPage=="Leadership") echo "active"?>">
                <a class="nav-link" href="<?php echo _LINK.'Leadership.php';?>"><?php echo _LEADERSHIP?></a>
            </li>
            <li class="nav-item <?php if($curPage=="Intercultural") echo "active"?>">
                <a class="nav-link" href="<?php echo _LINK.'Intercultural.php';?>"><?php echo _INTERCULTURAL?></a>
            </li>
            <li class="nav-item <?php if($curPage=="Soft") echo "active"?>">
                <a class="nav-link" href="<?php echo _LINK.'Soft.php';?>"><?php echo _SOFT?></a>
            </li>
            <li class="nav-item <?php if($curPage=="Insights") echo "active"?>">
                <a class="nav-link" href="<?php echo _LINK.'Insights.php';?>"><?php echo _INSIGHT?></a>
            </li>
            <li class="nav-item <?php if($curPage=="About") echo "active"?>">
                <a class="nav-link" href="<?php echo _LINK.'About.php';?>"><?php echo _ABOUT?></a>
            </li>
        </ul>
    </div>
</nav>