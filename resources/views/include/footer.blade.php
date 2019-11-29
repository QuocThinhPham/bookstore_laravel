<!-- Footer -->
<footer class="footer container-fluid">
  <div class="row">
    <div class="about col-lg-3">
      <h3>about us</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, ipsum placeat. Earum explicabo quae molestias minima culpa aliquam quas fugiat?</p>
      <ul>
        <li><i class="fab fa-facebook-f"></i></li>
        <li><i class="fab fa-twitter"></i></li>
        <li><i class="fab fa-instagram"></i></li>
        <li><i class="fab fa-youtube"></i></li>
        <li><i class="fab fa-google-plus-g"></i></li>
      </ul>
    </div>
    <div class="contact col-lg-3">
      <h3>contact us</h3>
      <ul>
        <li>
          <i class="fas fa-map-marker-alt"></i>111, puffin street, new york, 12354
        </li>
        <li>
          <i class="fas fa-phone-alt"></i>1-212-98765432
        </li>
        <li>
          <i class="fas fa-envelope"></i>Support@Company.Com</li>
      </ul>
    </div>
    <div class="info col-lg-2">
      <h3>information</h3>
      <ul>
        <li>about us</li>
        <li>delivery information</li>
        <li>privacy & policy</li>
        <li>term & conditions</li>
        <li>site map</li>
      </ul>
    </div>
    <div class="my-account col-lg-2">
      <h3>my account</h3>
      <ul>
        <li>brands</li>
        <li>gift certificates</li>
        <li>affiliates</li>
        <li>site map</li>
        <li>specials</li>
      </ul>
    </div>
    <div class="extras col-lg-2">
      <h3>extras</h3>
      <ul>
        <li>specials</li>
        <li>brands</li>
        <li>gift certificates</li>
        <li>affiliates</li>
        <li>my account</li>
      </ul>
    </div>
  </div>
</footer>
<!-- End Of Footer -->
<!-- jQuery -->
<script src="{{('frontend/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{('frontend/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{('frontend/fontawesome/all.js')}}"></script>
<script src="{{('frontend/js/app.js')}}"></script>
<script src="{{('frontend/js/animation.js')}}"></script>
<script type="text/javascript">
    $('.add-cart').click(function(e){
      e.preventDefault();
      var bookId = $(this).attr('id');
      $.ajax({
        url: window.location.origin + '/cart',
        method: 'get',
        data: {id: bookId},
        success: function(data){
          $('#cart-total').html(data);
          // alert('Thêm vào giỏ hàng thành công.');
        },
        error: function() {
          alert('Thêm vào giỏ hàng thất bại.');
        }
      });
    });
</script>
</body>

</html>