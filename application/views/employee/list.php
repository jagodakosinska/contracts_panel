<div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row">
                                            <?php 
                                            // var_dump($empl);
                                            foreach($employee as $emp){ ?>
                                    <a href="<?= site_url('employee/show_details/' . $emp->id) ?>" class="btn-box big span4 details__item"><i class="icon-user"></i><b><?= $emp->fname ?> <?= $emp->lname ?></b></a>
                                       
                                            <?php } ?>
                                
                                </div>
                              
                            </div>
                            <!--/#btn-controls-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->