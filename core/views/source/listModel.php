
<table class="small table table-striped">

    <tr>

        <th>ORDER</th><th>NAME</th><th>DATE</th><th>SELECT</th><th>REMOVE</th><th>EDIT</th>  
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
                <?php echo "-"; ?>
            </td>
            <td>
                <a href='<?php $this->link(['action'=>'setSource','source'=>$list['name']]); ?>' ><span class="glyphicon glyphicon-ok"></span></a>
            </td>
            <td>
                <a href='<?php $this->link(['action'=>'delSource','source'=>$list['name']]); ?>'><span class="glyphicon glyphicon-trash"></span></a>
            </td>
            <td>
                <?php if($list['name'] == $this->var_('activeSource')):?>
                    <a href='<?php $this->link(['render'=>'edit','source'=>$list['name']]); ?>'><span class="glyphicon glyphicon-edit"></span> - edit</a>
                <?php endif;?>    
            </td>
        </tr>

    <?php endforeach; ?>

</table>