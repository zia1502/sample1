<footer class="blog-footer">
  <p>Project Develop By <a href="https://getbootstrap.com/">Batch 213-1</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/sweetalert.js"></script>

<script>

function user_delete_id(row_id){
  swal({
    title: "Are you sure?",
    text: "Your will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false
    },
    function(){
      $.ajax({
        url: 'all_function.php',
        type: 'POST',
        dataType: 'json',
        data: 'user_delete_id='+row_id,
        success: function(response){
          // console.log(response);
          
          if (response.status == 'success'){
            $('#user_row_id_'+row_id).hide('slow');
            swal("Deleted!", response.message , "success");
          }else{
            swal("Database Error!", response.message , "error");
          }
        }

      })  

    });
}
</script>
  </body>
</html>