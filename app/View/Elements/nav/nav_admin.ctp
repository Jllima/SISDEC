<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/estagio/home"><i class="fa fa-home"></i> Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder-open"></i> Ocorrência<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <?php echo $this->Html->link(__('<i class="fa fa-pencil"></i> Cadastrar'), array('controller' => 'sisdec_occurrences', 'action' => 'add'), array('escape' => false)); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(__('<i class="fa fa-search"></i> Pesquisar'), array('controller' => 'sisdec_occurrences', 'action' => 'search'), array('escape' => false)); ?>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opções <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <?php echo $this->Html->link(__('Listar tipologias'), array('controller' => 'sisdec_tipologies', 'action' => 'index')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(__('Nova tipologia'), array('controller' => 'sisdec_tipologies', 'action' => 'add')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(__('Cadastrar novo usuario'), array('controller' => 'users', 'action' => 'add')); ?>
                        </li>
                        <li>
                        <?php  echo $this->Html->link(__('Listar Usuários'), array('controller' => 'sisdec_places', 'action' => 'list')); ?>
                        </li>
                        <!--<li>
                        <?php // echo $this->Html->link(__('Adicionar regional'), array('controller' => 'sisdec_places', 'action' => 'add')); ?>
                        </li>//-->
                        <!--<li>
                        <?php // echo $this->Html->link(__('Listar situações'), array('controller' => 'sisdec_situations', 'action' => 'index')); ?>
                        </li>-->
                        <!--<li>
                        <?php //echo $this->Html->link(__('Nova situação'), array('controller' => 'sisdec_situations', 'action' => 'add')); ?>
                        </li>//-->
                        <li>
                            <?php echo $this->Html->link(__('Listar fontes'), array('controller' => 'sisdec_sources', 'action' => 'index')); ?>
                        </li>
                        <!--<li>
                        <?php //echo $this->Html->link(__('Nova fonte'), array('controller' => 'sisdec_sources', 'action' => 'add')); ?>
                        </li>//-->
                        <!--<li>
                        <?php // echo $this->Html->link(__('Listar bairros'), array('controller' => 'sisdec_neighborhoods', 'action' => 'index')); ?>
                        </li>//-->
                        <!--<li>
                        <?php // echo $this->Html->link(__('Novo bairro'), array('controller' => 'sisdec_neighborhoods', 'action' => 'add')); ?>
                        </li>//-->
                        <!--<li>
                        <?php // echo $this->Html->link(__('Listar solicitante'), array('controller' => 'sisdec_requesters', 'action' => 'index')); ?>
                        </li>//-->
                        <!--<li>
                        <?php // echo $this->Html->link(__('Novo solicitante'), array('controller' => 'sisdec_requesters', 'action' => 'add')); ?>
                        </li>//-->
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->Session->read('Auth.User.username'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <?php echo $this->Html->link(__('<i class="fa fa-book"></i>   Perfil'), array('controller' => 'users', 'action' => 'edit', $this->Session->read('Auth.User.id')), array('escape' => false)); ?>
                        </li>

                        <li>
                            <?php echo $this->Html->link(__('<i class="fa fa-sign-out"></i>   logout'), array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?>
                        </li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>