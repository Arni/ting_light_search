<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


  <div class="ting-object view-mode-teaser clearfix">
    <div class="ting-object view-mode-search-result clearfix">
      <div class="field-group-format group_ting_left_col_search field-group-div group-ting-left-col-search ting-object-left speed-none effect-none">  
           <?php print $item['image'] ?>
       </div>
      <div class="field-group-format group_ting_right_col_search field-group-div group-ting-right-col-search ting-object-right speed-none effect-none"> 
        <div class="heading">
          <h2>
            <?php print $item['title_link'] ?>
            
          </h2>
        </div>
        <div class="content">
           <?php if (isset($item['creators'])) { print $item['creators']; }?>
           <?php if (isset($item['date'])) { print $item['date']; }?>
        </div>
        <div class="content">
           <?php if (isset($item['abstract'])) { print $item['abstract']; }?>
        </div>
        <?php if (isset($item['serie'])) : ?>
        <div class="field field-name-ting-series field-type-ting-series field-label-inline clearfix">
          <div class="field-label">Series:&nbsp;</div>
          <div class="field-items">
            <div class="field-item even">
              <?php  print $item['serie']; ?>
              : </div>
          </div>
        </div>
        <?php  endif ; ?>
        <?php if (isset($item['subjects'])) : ?>
        <div class="subjects content">
          <?php foreach ($item['subjects'] as $subject) 
            print $subject;            
          ?>         
        </div>
        <?php  endif ; ?>
      </div></div>
    <?php if (isset($item['types'])) : ?>
    <div class="availability content">
      <ul>
          <?php foreach ($item['types'] as $type): ?> 
            <?php print $type; ?>             
          <?php endforeach; ?>  
      </ul> 
    </div>
    <?php  endif ; ?>
  </div>

