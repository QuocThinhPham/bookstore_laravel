<!-- Menu Category -->

<div class="column-left">
  <div class="category">
    <div class="category-heading">
      Shop by Categories
    </div>
    <div class="category-content">
      <ul id="category-menu">
      @foreach(App\Types::all() as $type)
        <li class="dropdown">
          <a href="{{ url('listbook/'.$type->type_id) }}" class="dropdown-btn">
            <label for="">{{$type->type_name}}</label> <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </li>
      @endforeach
      </ul>
    </div>
  </div>
</div>
<!-- End Of Menu Category -->