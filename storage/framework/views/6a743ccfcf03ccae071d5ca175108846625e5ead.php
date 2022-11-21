<?php
function buttonSet($spShowButtonSet = null, $spAddUrl = null, $spAllData = null, $spTitle = null, $spExportCSV = null, $spCss = null, $xspAllData = NULL, $xspTitle = null){
ob_start();?>
<?php if(!empty($spShowButtonSet) && $spShowButtonSet == true): ?>
    <div class="level-item is-4">
        <?php if(!empty($spAllData)): ?>
            <a href="<?php echo e($spAllData  ?? NULL); ?>?route_id=<?php echo e(Request::get('route_id')); ?>"
               class="button is-small is-info-light is-rounded"
               aria-haspopup="true"
               aria-controls="dropdown-menu3">
                <span><i class="fas fa-database"></i> <?php echo e($spTitle ?? 'All Datas'); ?></span>
            </a>
        <?php endif; ?>
        <?php if($spAddUrl != '#'): ?>
            <a href="<?php echo e($spAddUrl ?? NULL); ?>" class="button is-small is-info-light is-rounded" aria-haspopup="true"
               aria-controls="dropdown-menu">
                <span><i class="fas fa-plus"></i> Add</span>
            </a>
        <?php endif; ?>


        <?php if(!empty($xspAllData)): ?>
            <?php if(auth()->user()->isManager(auth()->user()->id) || auth()->user()->isResource(auth()->user()->id) || auth()->user()->isCFO(auth()->user()->id) || auth()->user()->isAccountant(auth()->user()->id) ): ?>
                <div class="column is-1">
                    <div class="level-item is-4">
                        <?php if(!empty($xspAllData)): ?>
                            <a href="<?php echo e($xspAllData  ?? NULL); ?>"
                               class="button is-small <?php echo e($spCss  ?? 'is-info-light'); ?> is-rounded"
                               aria-haspopup="true"
                               aria-controls="dropdown-menu3">
                                <span><i class="fas fa-database"></i> <?php echo e($xspTitle ?? 'All Datas'); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>


        <?php if(!empty($spExportCSV)): ?>
            <div class="dropdown">
                <div class="dropdown-trigger">
                    <button class="button is-small is-info-light is-rounded" aria-haspopup="true"
                            aria-controls="dropdown-menu3">
                        <span><i class="fas fa-tasks"></i> Action</span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                    <div class="dropdown-content">
                        <a href="<?php echo e($spExportCSV); ?>" class="dropdown-item">
                            Export CSV
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
<?php endif; ?>

<?php
$content = ob_get_contents();
ob_end_clean();
return $content;
} ?>


<?php $__env->startSection('header_button_set'); ?>
    <style>
        .margin_left_hidden_mobile {
            margin-left: 0.5rem;
        }
    </style>

    <div class="is-hidden-touch is-flex margin_left_hidden_mobile">
        <?php //echo buttonSet($spShowButtonSet ?? null, $spAddUrl ?? null, $spAllData ?? null, $spTitle ?? null, $spExportCSV ?? null);?>
    </div>

<?php $__env->stopSection(); ?>

<div class="column is-3">
    <?php echo buttonSet($spShowButtonSet ?? null, $spAddUrl ?? null, $spAllData ?? null, $spTitle ?? null, $spExportCSV ?? null, $spCss ?? null, $xspAllData ?? NULL, $xspTitle ?? NULL);?>
</div>


<?php /*


// Backup Orginal Code




@if(!empty($spShowButtonSet) && $spShowButtonSet == true)
        <div class="level mb-0">
            <div class="level-item is-4">
                @if($spAddUrl != '#')
                    <a href="{{ $spAddUrl ?? NULL }}" class="button is-small is-info-light is-rounded" aria-haspopup="true"
                    aria-controls="dropdown-menu">
                        <span><i class="fas fa-plus"></i> Add</span>
                    </a>
                @endif
                @if(!empty($spAllData))
                    <a href="{{ $spAllData  ?? NULL }}?route_id={{ Request::get('route_id') }}"
                    class="button is-small is-info-light is-rounded"
                    aria-haspopup="true"
                    aria-controls="dropdown-menu3">
                        <span><i class="fas fa-database"></i> {{ $spTitle ?? 'All Datas' }}</span>
                    </a>
                @endif

                @if(!empty($spExportCSV))
                    <div class="dropdown">
                        <div class="dropdown-trigger">
                            <button class="button is-small is-info-light is-rounded" aria-haspopup="true" aria-controls="dropdown-menu3">
                                <span><i class="fas fa-tasks"></i> Action</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                            <div class="dropdown-content">
                                <a href="{{ $spExportCSV }}" class="dropdown-item">
                                    Export CSV
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif

*/
?>
<?php /**PATH C:\laragon\www\mts\requisition\resources\views/component/button_set.blade.php ENDPATH**/ ?>