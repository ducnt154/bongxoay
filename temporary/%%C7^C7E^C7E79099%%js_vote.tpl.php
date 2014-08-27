<?php /* Smarty version 2.6.6, created on 2014-08-26 23:45:30
         compiled from js_vote.tpl */ ?>
	<?php echo '
	<script type="text/javascript">
		$(\'.votedown_';  echo $this->_tpl_vars['page'];  echo '\').click(function(){
        var id=$(this).attr(\'entryId\');
        if( $(this).hasClass(\'unloved\')){
        $(this).removeClass(\'unloved\');
        likedeg($(this).attr(\'entryId\'),0,-1);
        }else{
        $(this).addClass(\'unloved\');
        if($(\'#post_love_\'+id).hasClass(\'loved\')){
        $(\'#post_love_\'+id).removeClass(\'loved\');
        }
        likedeg($(this).attr(\'entryId\'),0,1);	
        }
        });
        $(\'.voteup_';  echo $this->_tpl_vars['page'];  echo '\').click(function(){
        var id=$(this).attr(\'rel\');
        if( $(this).hasClass(\'loved\')){
        $(this).removeClass(\'loved\');
        likedeg($(this).attr(\'rel\'),-1,0);
        }else{
        $(this).addClass(\'loved\');
        if($(\'#vote-down-btn-\'+id).hasClass(\'unloved\')){
        $(\'#vote-down-btn-\'+id).removeClass(\'unloved\');
        }
        likedeg($(this).attr(\'rel\'),1,0);
        }
        });
    function likedeg(p,l,u){
        jQuery.ajax({
            type:\'POST\',
            url:\'';  echo $this->_tpl_vars['baseurl'];  echo '\'+ \'/votegag.php\',
			data:\'l=\'+l+\'&pid=\' + p +\'&u=\'+u,
            success:function(e){
                $(\'#love_count_\'+p).html(e);
                }
            });
        }
    </script>
	'; ?>