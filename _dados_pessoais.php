     <?php

    $todos = $api->getActiveProfile($_SESSION["session_token"]);
    $todos = $api->getActiveProfileDados($todos);

    ?>
 <!-- START @PAGE CONTENT -->
            <section id="page-content">

                <!-- Start page header -->
                <div class="header-content">
                    <h2><i class="fa fa-male"></i> <?php echo __('Perfil'); ?> <span><?php echo __('dados pessoais'); ?></span></h2>
                    <div class="breadcrumb-wrapper hidden-xs">
                        <span class="label"><?php echo __('Você está aqui:'); ?></span>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="index.php"><?php echo __('Dashboard'); ?></a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#"><?php echo __('Página'); ?></a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active"><?php echo __('Dados Pessoais') ?></li>
                        </ol>
                    </div><!-- /.breadcrumb-wrapper -->
                </div><!-- /.header-content -->
                <!--/ End page header -->

                <!-- Start body content -->
                <div class="body-content animated fadeIn">

                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">

                        <div class="panel rounded shadow">
                            <div class="panel-body">
                                <div class="inner-all">
                                    <ul class="list-unstyled">
                                        <li class="text-center">
                                            <!-- <img class="img-circle img-bordered-primary" src="http://img.djavaui.com/?create=100x100,4888E1?f=ffffff" alt="Tol Lee"> -->
                                        </li>
                                        <li class="text-center">
                                            <h4 class="text-capitalize">
                                                <!-- <p class="text-muted text-capitalize">web designer</p> -->

                                                <?php
                                                    $result = $api->getActiveProfile($_SESSION["session_token"]);
                                                    echo $api->getActiveProfileName($result);
                                                ?>
                                            </h4>
                                        </li>
                                       
                                        <li><br/></li>
                                        <li>
                                            <div class="btn-group-vertical btn-block">
                                                <!-- <a href="" class="btn btn-default"><i class="fa fa-cog pull-right"></i>Edit Account</a> -->
                                                <a href="index.php?action=sair" class="btn btn-default"><i class="fa fa-sign-out pull-right"></i><?php echo __('Sair'); ?></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.panel -->


                        <div class="panel panel-theme rounded shadow">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h3 class="panel-title"><?php echo __('Dados'); ?></h3>
                                </div>
                              
                                <div class="clearfix"></div>
                            </div><!-- /.panel-heading -->
                            <div class="panel-body no-padding rounded">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item"><?php echo __('Nome'); ?>: <b><?php echo $todos->glpiname; ?></b></li>
                                    <li class="list-group-item"><?php echo __('Nome Real'); ?>: <b><?php echo $todos->glpirealname; ?></b></li>
                                    <li class="list-group-item"><?php echo __('Primeiro Nome'); ?>: <b><?php echo $todos->glpifirstname; ?></b></li>
                                </ul>
                            </div><!-- /.panel-body -->
                        </div><!-- /.panel -->


                        <div class="panel panel-theme rounded shadow">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h3 class="panel-title"><?php echo __('Perfil Ativo'); ?> </h3>
                                </div>
                              
                                <div class="clearfix"></div>
                            </div><!-- /.panel-heading -->
                            <div class="panel-body no-padding rounded">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item">ID: <b><?php echo $todos->glpiactiveprofile->id; ?></b></li>
                                    <li class="list-group-item">Nome: <b><?php echo $todos->glpiactiveprofile->name; ?></b></li>
                                    <li class="list-group-item">Primeiro Nome: <b><?php echo $todos->glpiactiveprofile->interface; ?></b></li>
                                    <li class="list-group-item">Is Default: <b><?php echo $todos->glpiactiveprofile->is_default; ?></b></li>
                                    <li class="list-group-item">Helpdesk Hardware: <b><?php echo $todos->glpiactiveprofile->helpdesk_hardware; ?></b></li>
                                    <li class="list-group-item">Date Mod: <b><?php echo $todos->glpiactiveprofile->date_mod; ?></b></li>
                                    <li class="list-group-item">Comment: <b><?php echo $todos->glpiactiveprofile->comment; ?></b></li>

                                    <li class="list-group-item">Criar Ticket no Login: <b><?php echo $todos->glpiactiveprofile->create_ticket_on_login; ?></b></li>
                                    <li class="list-group-item">Ticket Template ID: <b><?php echo $todos->glpiactiveprofile->tickettemplates_id; ?></b></li>
                                    <li class="list-group-item">Carregar Status: <b><?php echo $todos->glpiactiveprofile->change_status; ?></b></li>
                                    <li class="list-group-item">Data Criação: <b><?php echo $todos->glpiactiveprofile->date_creation; ?></b></li>
                                    <li class="list-group-item">Backup: <b><?php echo $todos->glpiactiveprofile->backup; ?></b></li>
                                    <li class="list-group-item">Bookmark Public: <b><?php echo $todos->glpiactiveprofile->bookmark_public; ?></b></li>
                                    <li class="list-group-item">Budget: <b><?php echo $todos->glpiactiveprofile->budget; ?></b></li>
                                    <li class="list-group-item">Calendário: <b><?php echo $todos->glpiactiveprofile->calendar; ?></b></li>
                                    <li class="list-group-item">Cartridge: <b><?php echo $todos->glpiactiveprofile->cartridge; ?></b></li>
                                    <li class="list-group-item">Change: <b><?php echo $todos->glpiactiveprofile->change; ?></b></li>
                                    <li class="list-group-item">Change Validation: <b><?php echo $todos->glpiactiveprofile->changevalidation; ?></b></li>
                                    <li class="list-group-item">Computer: <b><?php echo $todos->glpiactiveprofile->computer; ?></b></li>
                                    <li class="list-group-item">Config: <b><?php echo $todos->glpiactiveprofile->config; ?></b></li>

                                    <li class="list-group-item">Consumable: <b><?php echo $todos->glpiactiveprofile->consumable; ?></b></li>
                                    <li class="list-group-item">Contact Enterprise: <b><?php echo $todos->glpiactiveprofile->contact_enterprise; ?></b></li>
                                    <li class="list-group-item">Contract: <b><?php echo $todos->glpiactiveprofile->contract; ?></b></li>
                                    <li class="list-group-item">Device: <b><?php echo $todos->glpiactiveprofile->device; ?></b></li>
                                    <li class="list-group-item">Document: <b><?php echo $todos->glpiactiveprofile->document; ?></b></li>
                                    <li class="list-group-item">Domain: <b><?php echo $todos->glpiactiveprofile->domain; ?></b></li>
                                    <li class="list-group-item">Dropdown: <b><?php echo $todos->glpiactiveprofile->dropdown; ?></b></li>
                                    <li class="list-group-item">Entity: <b><?php echo $todos->glpiactiveprofile->entity; ?></b></li>
                                    <li class="list-group-item">Followup: <b><?php echo $todos->glpiactiveprofile->followup; ?></b></li>

                                    <li class="list-group-item">Global Validation: <b><?php echo $todos->glpiactiveprofile->global_validation; ?></b></li>
                                    <li class="list-group-item">Group: <b><?php echo $todos->glpiactiveprofile->group; ?></b></li>
                                    <li class="list-group-item">Infocom: <b><?php echo $todos->glpiactiveprofile->infocom; ?></b></li>
                                    <li class="list-group-item">Internet: <b><?php echo $todos->glpiactiveprofile->internet; ?></b></li>
                                    <li class="list-group-item">Itilcategory: <b><?php echo $todos->glpiactiveprofile->itilcategory; ?></b></li>
                                    <li class="list-group-item">Knowbase: <b><?php echo $todos->glpiactiveprofile->knowbase; ?></b></li>
                                    <li class="list-group-item">Knowbasecategory: <b><?php echo $todos->glpiactiveprofile->knowbasecategory; ?></b></li>
                                    <li class="list-group-item">License: <b><?php echo $todos->glpiactiveprofile->license; ?></b></li>
                                    <li class="list-group-item">Link: <b><?php echo $todos->glpiactiveprofile->link; ?></b></li>
                                    <li class="list-group-item">Location: <b><?php echo $todos->glpiactiveprofile->location; ?></b></li>
                                    <li class="list-group-item">Logs: <b><?php echo $todos->glpiactiveprofile->logs; ?></b></li>
                                    <li class="list-group-item">Monitor: <b><?php echo $todos->glpiactiveprofile->monitor; ?></b></li>
                                    <li class="list-group-item">Netpoint: <b><?php echo $todos->glpiactiveprofile->netpoint; ?></b></li>
                                    <li class="list-group-item">Networking: <b><?php echo $todos->glpiactiveprofile->networking; ?></b></li>
                                    <li class="list-group-item">Notification: <b><?php echo $todos->glpiactiveprofile->notification; ?></b></li>
                                    <li class="list-group-item">Password Update: <b><?php echo $todos->glpiactiveprofile->password_update; ?></b></li>
                                    <li class="list-group-item">Peripheral: <b><?php echo $todos->glpiactiveprofile->peripheral; ?></b></li>
                                    <li class="list-group-item">Phone: <b><?php echo $todos->glpiactiveprofile->phone; ?></b></li>
                                    <li class="list-group-item">Planning: <b><?php echo $todos->glpiactiveprofile->planning; ?></b></li>
                                    <li class="list-group-item">Plugin Consumables: <b><?php echo $todos->glpiactiveprofile->plugin_consumables; ?></b></li>
                                    <li class="list-group-item">Plugin Consumables Group: <b><?php echo $todos->glpiactiveprofile->plugin_consumables_group; ?></b></li>
                                    <li class="list-group-item">Plugin Consumables Request: <b><?php echo $todos->glpiactiveprofile->plugin_consumables_request; ?></b></li>
                                    <li class="list-group-item">Plugin Consumables User: <b><?php echo $todos->glpiactiveprofile->plugin_consumables_user; ?></b></li>
                                    <li class="list-group-item">Plugin Consumables Validation: <b><?php echo $todos->glpiactiveprofile->plugin_consumables_validation; ?></b></li>
                                    <li class="list-group-item">Plugin Datainjection Model: <b><?php echo $todos->glpiactiveprofile->plugin_datainjection_model; ?></b></li>
                                    <li class="list-group-item">Plugin Datainjection Use: <b><?php echo $todos->glpiactiveprofile->plugin_datainjection_use; ?></b></li>
                                    <li class="list-group-item">Plugin Domains: <b><?php echo $todos->glpiactiveprofile->plugin_domains; ?></b></li>
                                    <li class="list-group-item">Plugin Domains Open Ticket: <b><?php echo $todos->glpiactiveprofile->plugin_domains_open_ticket; ?></b></li>
                                    <li class="list-group-item">Plugin Genericobject Types: <b><?php echo $todos->glpiactiveprofile->plugin_genericobject_types; ?></b></li>
                                    <li class="list-group-item">Plugin Manufacturersimports: <b><?php echo $todos->glpiactiveprofile->plugin_manufacturersimports; ?></b></li>
                                    <li class="list-group-item">Plugin Mydashboard: <b><?php echo $todos->glpiactiveprofile->plugin_mydashboard; ?></b></li>
                                    <li class="list-group-item">Plugin Mydashboard Config: <b><?php echo $todos->glpiactiveprofile->plugin_mydashboard_config; ?></b></li>
                                    <li class="list-group-item">Plugin Order Bill: <b><?php echo $todos->glpiactiveprofile->plugin_order_bill; ?></b></li>
                                    <li class="list-group-item">Plugin Order Order: <b><?php echo $todos->glpiactiveprofile->plugin_order_order; ?></b></li>

                                    <li class="list-group-item">Plugin Order Reference: <b><?php echo $todos->glpiactiveprofile->plugin_order_reference; ?></b></li>
                                    <li class="list-group-item">Plugin Resources: <b><?php echo $todos->glpiactiveprofile->plugin_resources; ?></b></li>
                                    <li class="list-group-item">Plugin Resources All: <b><?php echo $todos->glpiactiveprofile->plugin_resources_all; ?></b></li>
                                    <li class="list-group-item">Plugin Resources Budget: <b><?php echo $todos->glpiactiveprofile->plugin_resources_budget; ?></b></li>
                                    <li class="list-group-item">Plugin Resources Checklist: <b><?php echo $todos->glpiactiveprofile->plugin_resources_checklist; ?></b></li>
                                    <li class="list-group-item">Plugin Resources Dropdown Public: <b><?php echo $todos->glpiactiveprofile->plugin_resources_dropdown_public; ?></b></li>
                                    <li class="list-group-item">Plugin Resources Employee: <b><?php echo $todos->glpiactiveprofile->plugin_resources_employee; ?></b></li>
                                    <li class="list-group-item">Plugin Resources Employment: <b><?php echo $todos->glpiactiveprofile->plugin_resources_employment; ?></b></li>
                                    <li class="list-group-item">Plugin Resources Holiday: <b><?php echo $todos->glpiactiveprofile->plugin_resources_holiday; ?></b></li>
                                    <li class="list-group-item">Plugin Resources Open Ticket: <b><?php echo $todos->glpiactiveprofile->plugin_resources_open_ticket; ?></b></li>
                                    <li class="list-group-item">Plugin Resources Resting: <b><?php echo $todos->glpiactiveprofile->plugin_resources_resting; ?></b></li>
                                    <li class="list-group-item">Plugin Resources Task: <b><?php echo $todos->glpiactiveprofile->plugin_resources_task; ?></b></li>

                                    <li class="list-group-item">Plugin Tasklists: <b><?php echo $todos->glpiactiveprofile->plugin_tasklists; ?></b></li>
                                    <li class="list-group-item">Plugin Timelineticket Ticket: <b><?php echo $todos->glpiactiveprofile->plugin_timelineticket_ticket; ?></b></li>
                                    <li class="list-group-item">Printer: <b><?php echo $todos->glpiactiveprofile->printer; ?></b></li>
                                    <li class="list-group-item">Problem: <b><?php echo $todos->glpiactiveprofile->problem; ?></b></li>
                                    <li class="list-group-item">Profile: <b><?php echo $todos->glpiactiveprofile->profile; ?></b></li>
                                    <li class="list-group-item">Project: <b><?php echo $todos->glpiactiveprofile->project; ?></b></li>
                                    <li class="list-group-item">Projecttask: <b><?php echo $todos->glpiactiveprofile->projecttask; ?></b></li>
                                    <li class="list-group-item">Queuedmail: <b><?php echo $todos->glpiactiveprofile->queuedmail; ?></b></li>
                                    <li class="list-group-item">Reminder Public: <b><?php echo $todos->glpiactiveprofile->reminder_public; ?></b></li>
                                    <li class="list-group-item">Reports: <b><?php echo $todos->glpiactiveprofile->reports; ?></b></li>
                                    <li class="list-group-item">Reservation: <b><?php echo $todos->glpiactiveprofile->reservation; ?></b></li>
                                    <li class="list-group-item">Rssfeed Public: <b><?php echo $todos->glpiactiveprofile->rssfeed_public; ?></b></li>
                                    <li class="list-group-item">Rule Dictionnary Dropdown: <b><?php echo $todos->glpiactiveprofile->rule_dictionnary_dropdown; ?></b></li>
                                    <li class="list-group-item">Rule Dictionnary Printer: <b><?php echo $todos->glpiactiveprofile->rule_dictionnary_printer; ?></b></li>
                                    <li class="list-group-item">Rule Dictionnary Software: <b><?php echo $todos->glpiactiveprofile->rule_dictionnary_software; ?></b></li>
                                    <li class="list-group-item">Rule Import: <b><?php echo $todos->glpiactiveprofile->rule_import; ?></b></li>
                                    <li class="list-group-item">Rule Ldap: <b><?php echo $todos->glpiactiveprofile->rule_ldap; ?></b></li>
                                    <li class="list-group-item">Rule Mailcollector: <b><?php echo $todos->glpiactiveprofile->rule_mailcollector; ?></b></li>
                                    <li class="list-group-item">Rule Softwarecategories: <b><?php echo $todos->glpiactiveprofile->rule_softwarecategories; ?></b></li>
                                    <li class="list-group-item">Rule Ticket: <b><?php echo $todos->glpiactiveprofile->rule_ticket; ?></b></li>
                                    <li class="list-group-item">Search Config: <b><?php echo $todos->glpiactiveprofile->search_config; ?></b></li>
                                    <li class="list-group-item">Show Group Hardware: <b><?php echo $todos->glpiactiveprofile->show_group_hardware; ?></b></li>
                                    <li class="list-group-item">Sla: <b><?php echo $todos->glpiactiveprofile->sla; ?></b></li>
                                    <li class="list-group-item">Software: <b><?php echo $todos->glpiactiveprofile->software; ?></b></li>
                                    <li class="list-group-item">Solutiontemplate: <b><?php echo $todos->glpiactiveprofile->solutiontemplate; ?></b></li>
                                    <li class="list-group-item">State: <b><?php echo $todos->glpiactiveprofile->state; ?></b></li>
                                    <li class="list-group-item">Statistic: <b><?php echo $todos->glpiactiveprofile->statistic; ?></b></li>
                                    <li class="list-group-item">Task: <b><?php echo $todos->glpiactiveprofile->task; ?></b></li>
                                    <li class="list-group-item">Taskcategory: <b><?php echo $todos->glpiactiveprofile->taskcategory; ?></b></li>
                                    <li class="list-group-item">Ticket: <b><?php echo $todos->glpiactiveprofile->ticket; ?></b></li>
                                    <li class="list-group-item">Ticketcost: <b><?php echo $todos->glpiactiveprofile->ticketcost; ?></b></li>
                                    <li class="list-group-item">Ticketrecurrent: <b><?php echo $todos->glpiactiveprofile->ticketrecurrent; ?></b></li>
                                    <li class="list-group-item">Tickettemplate: <b><?php echo $todos->glpiactiveprofile->tickettemplate; ?></b></li>
                                    <li class="list-group-item">Ticketvalidation: <b><?php echo $todos->glpiactiveprofile->ticketvalidation; ?></b></li>
                                    <li class="list-group-item">Transfer: <b><?php echo $todos->glpiactiveprofile->transfer; ?></b></li>
                                    <li class="list-group-item">Typedoc: <b><?php echo $todos->glpiactiveprofile->typedoc; ?></b></li>
                                    <li class="list-group-item">User: <b><?php echo $todos->glpiactiveprofile->user; ?></b></li>

                                </ul>
                            </div><!-- /.panel-body -->
                        </div><!-- /.panel -->

                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">

                    <div class="profile-cover">
                        <div class="cover rounded shadow no-overflow">
                                    <!-- Start sample table -->
                                    <div class="table-responsive rounded mb-20">
                                        <table id="tour-16" class="table table-striped table-theme">
                                            <thead>
                                            <tr>
                                                <th class="text-center border-right">#</th>
                                                <th>Plugin</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                                $cnttk = count($todos->glpi_plugins);
                                                if ($cnttk != "") {
                                                   foreach ($todos->glpi_plugins as $key => $value) {
                                                                                       
                                                       echo "<tr>
                                                                   <td class='text-center border-right'>".$key."</td>
                                                                   <td>
                                                                       <span>".$value."</span>
                                                                   </td>
                                                               </tr>";
                                                   }
                                                }
                                                else {
                                                    echo "<tr>
                                                                <td class='text-center border-right'></td>
                                                                <td class='text-center'></td>
                                                            </tr>";
                                                }
                                               
                                            ?>
                                          
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th class="text-center border-right">#</th>
                                                <th>Plugin</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div><!-- /.table-responsive -->
                                    <!--/ End sample table -->
                        </div><!-- /.cover -->
                    </div><!-- /.profile-cover -->
                    <div class="divider"></div>


                    <div class="panel rounded shadow">
                            
                    </div><!-- /.panel -->
                   

                </div><!-- /.body-content -->
                <!--/ End body content -->

             

            </section><!-- /#page-content -->
            <!--/ END PAGE CONTENT -->