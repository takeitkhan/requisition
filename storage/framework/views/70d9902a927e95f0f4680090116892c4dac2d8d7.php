<div class="columns">
    <div class="column">
        <strong>Transport Allowances Breakdown</strong>
        <?php if(!empty($task_transport_breakdown)): ?>
            <a style="float: right">
                                            <span style="cursor: pointer;" class="tag is-normal is-success"
                                                  id="addrowTa">Add &nbsp; <strong>+</strong></span>
            </a>
        <?php endif; ?>
    </div>
    <div class="block">
    </div>
</div>

<div id="ta_wrap">
    <?php $ta_count = 0; ?>
    <?php if(!empty($task_transport_breakdown)): ?>
        <?php $__currentLoopData = $task_transport_breakdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="columns">
                <div class="column is-1">
                    <div class="block" style="margin-top: 3px;">
                                                                    <span style="cursor: pointer;" class="tag is-danger ibtnDelTa">
                                                                    Del <button class="delete is-small"></button>
                                                                    </span>
                    </div>
                </div>
                <div class="column is-3">
                    <input type="text" name="transport[<?php echo e($ta_count = $key); ?>][where_to_where]"
                           class="where_to_where input is-small" value="<?php echo e($item->where_to_where); ?>" required/>
                </div>
                <div class="column is-2">
                    <div class="control">
                        <div class="select is-small">
                            <?php
                            $transports = [
                                'Bus', 'Rickshaw', 'CNG', 'Taxi', 'Auto', 'Tempo', 'Van', 'Train', 'Boat', 'Other'
                            ];
                            ?>
                            <select name="transport[<?php echo e($ta_count = $key); ?>][transport_type]" required>
                                <option value="">Select Transport Type</option>
                                <?php $__currentLoopData = $transports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        value="<?php echo e($transport); ?>" <?php echo e($item->transport_type == $transport ? 'selected' : ''); ?>><?php echo e($transport); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="column is-2">
                    <input class="input is-small" name="transport[<?php echo e($ta_count = $key); ?>][ta_amount]"
                           type="number" min="0"
                           step=".01" value="<?php echo e($item->ta_amount); ?>" required/>
                </div>
                <div class="column">
                    <input class="input is-small" name="transport[<?php echo e($ta_count = $key); ?>][ta_note]"
                           type="text"
                           value="<?php echo e($item->ta_note); ?>" required/>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <div class="columns">
            <div class="column is-1">
                <div class="block" style="margin-top: 3px;">
                    <a style="display: block">
                                            <span style="cursor: pointer;" class="tag is-success"
                                                  id="addrowTa">Add &nbsp; <strong>+</strong></span>
                    </a>
                </div>
            </div>
            <div class="column is-3">
                <input type="text" name="transport[0][where_to_where]"
                       class="where_to_where input is-small"
                       placeholder="Where to Where" required/>
            </div>
            <div class="column is-2">
                <div class="control">
                    <div class="select is-small">
                        <?php
                        $transports = [
                            'Bus', 'Rickshaw', 'CNG', 'Taxi', 'Auto', 'Tempo', 'Van', 'Train', 'Boat', 'Other'
                        ];
                        ?>
                        <select name="transport[0][transport_type]" required>
                            <option>Select Transport Type</option>
                            <?php $__currentLoopData = $transports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($transport); ?>"><?php echo e($transport); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="column is-2">
                <input class="input is-small" name="transport[0][ta_amount]" type="number" min="0"
                       step=".01" placeholder="TA Amount" required/>
            </div>
            <div class="column">
                <input class="input is-small" name="transport[0][ta_note]" type="text"
                       placeholder="TA Note" required/>
            </div>
        </div>
    <?php endif; ?>
</div>


<script id="ta_form" type="text/template">
    <div class="columns" counter="">
        <div class="column is-1">
            <div class="block" style="margin-top: 3px;">
                    <span style="cursor: pointer;" class="tag is-danger ibtnDelTa">
                    Del <button class="delete is-small"></button>
                    </span>
            </div>
        </div>
        <div class="column is-3">
            <input type="text" name=""
                   class="input is-small where_to_where"
                   placeholder="Where to Where" required/>
        </div>
        <div class="column is-2">
            <div class="control">
                <div class="select is-small">
                    <?php
                    $transports = [
                        'Bus', 'Rickshaw', 'CNG', 'Taxi', 'Auto', 'Tempo', 'Van', 'Train', 'Boat', 'Other'
                    ];
                    ?>
                    <select name="" class="transport_type" required>
                        <option>Select Transport Type</option>
                        <?php $__currentLoopData = $transports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($transport); ?>"><?php echo e($transport); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="column is-2">
            <input class="input is-small ta_amount" name="" type="number" min="0" step=".01"
                   placeholder="TA Amount" required/>
        </div>
        <div class="column">
            <input class="input is-small ta_note" name="" type="text"
                   placeholder="TA Note" required/>
        </div>
    </div>
</script>

<script>
    //Transport
    var ta_counter = '<?php echo e($ta_count +1); ?>';
    $("#addrowTa").on("click", function () {
        var cols = '<div class="ta' + ta_counter + '">';
        cols += $('#ta_form').html();
        cols += '</div>';
        $("div#ta_wrap").append(cols);

        $(".ta" + ta_counter + " .where_to_where").attr('name', "transport[" + ta_counter + "][where_to_where]");
        $(".ta" + ta_counter + " .transport_type").attr('name', "transport[" + ta_counter + "][transport_type]");
        $(".ta" + ta_counter + " .ta_amount").attr('name', "transport[" + ta_counter + "][ta_amount]");
        $(".ta" + ta_counter + " .ta_note").attr('name', "transport[" + ta_counter + "][ta_note]");

        ta_counter++;
    });

    $("div#ta_wrap").on("click", ".ibtnDelTa", function (event) {
        $(this).closest("div.columns").remove();
        counter -= 1
    });
</script>
<?php /**PATH /home/admin/domains/mtsbd.net/public_html/employee/vendor/tritiyo/task/src/views/taskrequisitionbill/resource_form/transport_breakdown.blade.php ENDPATH**/ ?>