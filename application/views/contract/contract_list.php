<?php
                if (is_array($contract) && count($contract)) {
                    foreach ($contract as $con) {
                        ?>
                        <!-- <div class="container"> -->
                        <a href="<?= site_url('contract/get_by_id/' . $con->id) ?>" class="btn-box big span4"><i class="icon-book"></i><b><?= $con->full_number ?></b>
                            <p><?= $con->bdate ?></p>
                        </a>
                        
                        <!-- </div> -->
                    <?php }
                    } else { ?>
                    <h3>Brak umów</h3>
                <?php }  ?>
