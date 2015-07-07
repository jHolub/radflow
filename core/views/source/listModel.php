
<table class="table table-striped">

    <tr>

        <th>ORDER</th><th>NAME</th><th>ACTION</th><th>ACTION</th><th>ACTION</th>  
    </tr>

    <?php foreach ($this->var_('list') as $key => $list):?>
        
        <tr <?php if ($this->var_('activeSource') == $list['name']): ?> id='activeModel' <?php endif; ?>>

            <td>
                <?php echo $key + 1 . "."; ?>
            </td>
            <td>
                <?php echo $list['name']; ?>
            </td>
            <td>
                <a href='<?php $this->link(['action'=>'setSource','source'=>$list['name']]); ?>' >SELECT</a>
            </td>
            <td>
                <a href='<?php $this->link(['action'=>'delSource','source'=>$list['name']]); ?>'>DELETE</a>
            </td>
            <td>
                <?php if($list['name'] == $this->var_('activeSource')):?>
                    <a href='<?php $this->link(['render'=>'edit','source'=>$list['name']]); ?>'>EDIT</a>
                <?php endif;?>    
            </td>
        </tr>

    <?php endforeach; ?>

</table>