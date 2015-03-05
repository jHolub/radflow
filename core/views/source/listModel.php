
<table id='model_table'>

    <tr>

        <th>NUMBER</th><th>NAME</th><th>ACTION</th><th>ACTION</th><th>ACTION</th>  
    </tr>

    <?php for ($i = 0; $i < count($this->model->list); $i++): ?>

        <tr <?php if ($this->model->getActiveSource() == $this->model->list[$i]): ?> id='activeModel' <?php endif; ?>>

            <td>
                <?php echo $i + 1; ?>
            </td>
            <td>
                <?php $this->write($this->model->list[$i]); ?>
            </td>
            <td>
                <a class='select' href='<?php echo \GLOBALVAR\ROOT; ?>/?core=source&action=setSource&source=<?php $this->write($this->model->list[$i]); ?>' >SELECT</a>
            </td>
            <td>
                <a href='<?php echo \GLOBALVAR\ROOT ?>/?core=source&action=delSource&source=<?php $this->write($this->model->list[$i]); ?>'>DELETE</a>
            </td>
            <td>
                <?php if($this->model->list[$i] == $this->model->getActiveSource()):?>
                    <a href='<?php echo \GLOBALVAR\ROOT ?>/?core=source&render=edit&source=<?php $this->write($this->model->list[$i]); ?>'>EDIT</a>
                <?php endif;?>    
            </td>
        </tr>

    <?php endfor; ?>

</table>