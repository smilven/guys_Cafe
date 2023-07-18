<table>
    @foreach ($foodmenus as $FoodMenu)
<tr>     
    <td>{{$FoodMenu['food_id']}}</td>
    <td>{{$FoodMenu['food_name']}}</td>
    <td>{{$FoodMenu['food_description']}}</td>
    <td><img src="{{asset('images/')}}/{{$FoodMenu->image}}" max-height="100px" max-width="100" name="productImage" alt="" class="img-fluid"></td>
    <td>{{$FoodMenu['food_category']}}</td>
    <td>{{$FoodMenu['food_price']}}</td>
   
</tr>
@endforeach
</table>