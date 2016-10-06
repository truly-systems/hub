  <!-- START @PAGE CONTENT -->
            <section id="page-content">

                <!-- Start page header -->
                <div id="tour-11" class="header-content">
                    <h2><i class="fa fa-home"></i><?php echo __('Painel'); ?> <span><?php echo __('Início'); ?></span></h2>
                    <div class="breadcrumb-wrapper hidden-xs">
                        <span class="label"><?php echo __('Você está em:'); ?></span>
                        <ol class="breadcrumb">
                            <li class="active"><?php echo __('Início'); ?></li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->

                <!-- Start body content -->
                <div class="body-content animated fadeIn">

                    <div id="tour-12" class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-facebook rounded">
                                <span class="mini-stat-icon"><i class="fa fa-check fg-facebook"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter">
                                        <?php
                                            echo $api->countTicketOpen(json_decode($api->getTicket($_SESSION["session_token"])));
                                        ?>
                                    </span>
                                    <?php echo __('Chamados Abertos'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-twitter rounded">
                                <span class="mini-stat-icon"><i class="fa fa-bullhorn fg-twitter"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter">0</span>
                                    <?php echo __('Mudanças Abertas'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-googleplus rounded">
                                <span class="mini-stat-icon"><i class="fa fa-bug fg-googleplus"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter">
                                        <?php
                                            echo $api->countProblemOpen(json_decode($api->getProblem($_SESSION["session_token"])));
                                        ?>
                                    </span>
                                    <?php echo __('Ploblemas Abertos'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-bitbucket rounded">
                                <span class="mini-stat-icon"><i class="fa fa-check fg-bitbucket"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter">
                                        <?php
                                            echo $api->countTicketClose(json_decode($api->getTicket($_SESSION["session_token"])));
                                        ?>
                                    </span>
                                    <?php echo __('Chamados Fechados'); ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    
                    <div class="row">
                        <div class="col-md-9">

                            <!-- Start sample table -->
                            <div class="table-responsive rounded mb-20">
                                <table id="tour-16" class="table table-striped table-theme">
                                    <thead>
                                    <tr>
                                        <th class="text-center border-right"><?php echo __('ID'); ?></th>
                                        <th><?php echo __('Assunto'); ?></th>
                                        <th><?php echo __('Data Criação'); ?></th>
                                        <th><?php echo __('Data Modificação'); ?></th>
                                        <th class="text-center"><?php echo __('Texto'); ?></th>
                                        <th class="text-center"><?php echo __('Status'); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $tk = $api->getTicketsContent($api->getTicket($_SESSION["session_token"]));
                                        $cnttk = count($tk);
                                        if ($cnttk != "") {
                                            for ($i=0; $i < $cnttk; $i++) { 
                                                                                    
                                               echo "<tr>
                                                           <td class='text-center border-right'>".$tk[$i]["id"]."</td>
                                                           <td>
                                                               <span>".$tk[$i]["name"]."</span>
                                                           </td>
                                                           <td>".convertDataView($tk[$i]["date_mod"])."</td>
                                                           <td>".convertDataView($tk[$i]["date_creation"])."</td>
                                                           <td class='text-center'>
                                                               ".substr($tk[$i]["content"],0,100)." ...
                                                           </td>
                                                           <td class='text-center'>
                                                               ".casesStatus($tk[$i]["status"])."
                                                           </td>
                                                       </tr>";
                                           }
                                        }
                                        else {
                                            echo "<tr>
                                                        <td class='text-center border-right'></td>
                                                        <td>
                                                            <span>";
                                            echo __('Nenhum dado cadastrado');

                                            echo "</span>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class='text-center'>
                                                        </td>
                                                        <td class='text-center'>
                                                        </td>
                                                    </tr>";
                                        }
                                       
                                    ?>
                                  
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center border-right"><?php echo __('ID'); ?></th>
                                        <th><?php echo __('Assunto'); ?></th>
                                        <th><?php echo __('Data Criação'); ?></th>
                                        <th><?php echo __('Data Modificação'); ?></th>
                                        <th class="text-center"><?php echo __('Texto'); ?></th>
                                        <th class="text-center"><?php echo __('Status'); ?></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.table-responsive -->
                            <!--/ End sample table -->

                        </div>
                        <div class="col-md-3">

                            <!-- Start mini stats social widget -->
                            <div id="tour-17" class="row">
                                <div class="col-md-12  col-xs-4 col-xs-override">

                                    <div class="panel rounded shadow">
                                        <div class="panel-heading text-center bg-youtube">
                                            <p class="inner-all no-margin">
                                                <i class="fa fa-question fa-5x"></i>
                                            </p>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body text-center">
                                            <p class="h4 no-margin inner-all text-strong">
                                                <!-- <span class="block counter">342</span> -->
                                                <span class="block">
                                                <a href="http://trulysystems.com/tsys/sobre-a-truly/" target="_blank"><?php echo __('Sobre a Truly'); ?></a>
                                                </span>
                                            </p>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->

                                </div>
                                <div class="col-md-12 col-sm-4 col-xs-4 col-xs-override">

                                    <div class="panel rounded shadow">
                                        <div class="panel-heading text-center bg-dribbble">
                                            <p class="inner-all no-margin">
                                                <i class="fa fa-tty fa-5x"></i>
                                            </p>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body text-center">
                                            <p class="h4 no-margin inner-all text-strong">
                                                <!-- <span class="block counter">2,341</span> -->
                                                <span class="block">
                                                <a href="http://tm.trulysystems.com" target="_blank"><?php echo __('Atendimento'); ?></a>
                                                </span>
                                            </p>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->

                                </div>
                               
                            </div>

                            <!--/ End mini stats social widget -->

                        </div>
                    </div><!-- /.row -->

                </div><!-- /.body-content -->
                <!--/ End body content -->

                <!-- Start footer content -->
                <footer class="footer-content">
                    <span id="tour-19">
                        <?php echo date("Y"); ?> - <span id="copyright-year"></span> &copy; Truly. <?php echo __('Created by'); ?> <a href="http://djavaui.com/" target="_blank">Djava UI</a>, Yogyakarta ID
                    </span>
                    <!-- <span id="tour-20" class="pull-right">0.01 GB(0%) of 15 GB used</span> -->
                </footer><!-- /.footer-content -->
                <!--/ End footer content -->

            </section><!-- /#page-content -->
            <!--/ END PAGE CONTENT -->