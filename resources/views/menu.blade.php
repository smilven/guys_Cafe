@extends('layout')
@section('content')




<div class="list-group">
    <ul class="list-group list-group-light list-group-small">


        <!--==========or search bar放这边===-->


        <div id="scrollfood" data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
            <section>
                <div id="section1">


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="/images/food.png" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>C001</p></strong>
                        <p>Chicken Chop</p>
                        <p>Chop+Water</p>
                        <p>Rm 6.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h4 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">
                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.ajinomoto.com.my/sites/default/files/content/recipe-attach/2021-03/Chicken-Chop-e1459494464332-248x300.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>C002</p></strong>
                        <p>Fried Chicken Chop</p>
                        <p>Chop+Coke</p>
                        <p>Rm 9.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h2>Chicken Chop</h2>
                                <p class="h3 py-2">RM6.9</p>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://order.ahhyum.com/wp-content/uploads/2020/04/IMG_1409.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>C003</p></strong>
                        <p>Chesse Chicken Chop</p>
                        <p>Vegetable+Sky Juice</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>



                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://papparich.com.my/pr/wp-content/uploads/2016/07/1-pappa-chicken-chop-with-black-pepper-sauce-1.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>C004</p></strong>
                        <p>Pappa Chicken Chop</p>
                        <p>Chop+Egg+Fries</p>
                        <p>Rm 15.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://lemontree.com.my/wp-content/uploads/2020/05/img35.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>C005</p></strong>
                        <p>BBQ Chicken Chop</p>
                        <p>Fries+Water</p>
                        <p>Rm 10.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://cdn.store-assets.com/s/618972/i/23302201.jpg?width=1024" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <strong><p>C006</p></strong>
                        <p>Japs Chicken Chop</p>
                        <p>Chop+Water</p>
                        <p>Rm12.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>







                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://i.ytimg.com/vi/uvArf37jxfQ/maxresdefault.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <strong><p>C007</p></strong>
                        <p>Mushroom Chicken Chop</p>
                        <p>Chop+Water</p>
                        <p>Rm13.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>



                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.unileverfoodsolutions.com.my/dam/ufs-my/calcmenu/recipes/western-stage-recipe---picture/FA_SaltedEggSalsaSauce-LANDSCAPE1260x709px.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <strong><p>C008</p></strong>
                        <p>Salted Egg Chicken Chop</p>
                        <p>Free Water</p>
                        <p>Rm10.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNwlUS22T5vdFHlr69tQFBdV9M4C1xj0ba6A&usqp=CAU" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <strong><p>C009</p></strong>
                        <p>Super Chicken Chop</p>
                        <p>Chop+Water+Vegetable</p>
                        <p>Rm15.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>










                </div>
            </section>
            <section>
                <div id="section2">


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://static.toiimg.com/thumb/53110049.cms?width=1200&height=900" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>P001</p></strong>
                        <p>Cheese Pizza</p>
                        <p>Pizza+ Free Water</p>
                        <p>Rm 16.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.foodandwine.com/thmb/CGXpgjWOgHWv9TsqyMoLyl5cYrs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/soppressata-pizza-with-calabrian-chile-hot-honey-FT-RECIPE0422-827abb3537834dbcb6ab0bbd6efece39.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>P002</p></strong>
                        <p>Soppressata Pizza</p>
                        <p>Pizza+Free Water</p>
                        <p>Rm 18.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://img.kidspot.com.au/pZnR2nZu/kk/2015/03/hawaiian-pizza-recipe-605894-2.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                     <strong><p>P003</p></strong>
                        <p>Hawaii Pizza</p>
                        <p>Pizza + Free Water</p>
                        <p>Rm 14.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.thespruceeats.com/thmb/MD-dSsFP6k5XBSk9XcdOIfnF4K0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/prosciutto-pizza-4844358-hero-04-c0a6f73057ce4fed88982b75a5c2c8e1.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>P004</p></strong>
                        <p>Prosciutto Pizza</p>
                        <p>Pizza+ Free Water</p>
                        <p>Rm 11.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://static.toiimg.com/thumb/56933159.cms?imgsize=686279&width=800&height=800" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>P005</p></strong>
                        <p>Ultimate Vegie Pizza</p>
                        <p>Pizza + Free Water</p>
                        <p>Rm 16.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a3/Eq_it-na_pizza-margherita_sep2005_sml.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>P006</p></strong>
                        <p>Neapolitan pizza</p>
                        <p>Pizza + Free Water</p>
                        <p>Rm 16.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/216054.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>P007</p></strong>
                        <p>Spicy Chicken Piza Pizza</p>
                        <p>Pizza + Free Water</p>
                        <p>Rm 13.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.easycookingwithmolly.com/wp-content/uploads/2022/06/indian-chicken-curry-pizza-recipe-1.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>P008</p></strong>
                        <p>CUrry Pizza</p>
                        <p>Pizza + Free Water</p>
                        <p>Rm 16.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://img.freepik.com/premium-photo/spicy-shrimp-tom-yum-pizza_1339-54330.jpg?w=2000" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>P009</p></strong>
                        <p>Tomyam Pizza</p>
                        <p>Pizza + Free Water</p>
                        <p>Rm 16.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>




                </div>
            </section>

            <section>
                <div id="section3">
                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://assets.epicurious.com/photos/5c745a108918ee7ab68daf79/master/pass/Smashburger-recipe-120219.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>H001</p></strong>
                        <p>Signature Cheese Burger</p>
                        <p>Burger + water</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YnVyZ2VyfGVufDB8fDB8fA%3D%3D&w=1000&q=80" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>H002</p></strong>
                        <p>Double Beef Burger</p>
                        <p>Burger + water</p>
                        <p>Rm 6.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.burgerking.com.my/upload/image/Product/67/Mushroom%20Veggie%20Ala%20Carte.png" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>H003</p></strong>
                        <p>Mushroom Veggie Burger</p>
                        <p>Burger + water</p>
                        <p>Rm 6.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>



                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://eatbook.sg/wp-content/uploads/2019/05/Ramly-Burger-Recipe-1024x683.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>H004</p></strong>
                        <p>Ramly Style Burger</p>
                        <p>Burger + water</p>
                        <p>Rm 6.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>



                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.gardengourmet.com/sites/default/files/recipes/2bd4467c1d9a388bf02d450402b6427f_GG_Halloween_Devil_Burger_IG_POST_1ff.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>H005</p></strong>
                        <p>Evil Haloween Burger</p>
                        <p>CBurger + water</p>
                        <p>Rm 6.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimg1.cookinglight.timeinc.net%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F4_3_horizontal_-_1200x900%2Fpublic%2Fimage%2F2017%2F05%2Fmain%2Fall-american-grilled-burger-1707p98.jpg%3Fitok%3DH9gJu0I8" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>H006</p></strong>
                        <p>Grill Chicken Burger</p>
                        <p>Burger + water</p>
                        <p>Rm 6.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.kitchensanctuary.com/wp-content/uploads/2019/08/Crispy-Chicken-Burger-square-FS-4518.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>H007</p></strong>
                        <p>Honey Mustard Burger</p>
                        <p>Chop+Water</p>
                        <p>Rm 6.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>






                </div>
            </section>


            <section>
                <div id="section4">


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://images.immediate.co.uk/production/volatile/sites/30/2022/09/Spicy-tomato-spaghetti-caf3053.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                    <strong><p>P001</p></strong>
                        <p>Tomato Spaghetti</p>
                        <p>Free WaterWater</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://images.immediate.co.uk/production/volatile/sites/30/2022/01/Red_Pepper_Anchovy_Spaghetti-f46a58b.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                         <strong><p>P002</p></strong>
                        <p>Red Paper & Anchovy Spaghetti</p>
                        <p>Free Orange Juice</p>
                        <p>Rm 10.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.simplyrecipes.com/thmb/ZNY4aicnnMCJwwIdzM1A4opV_6o=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Italian-Sausage-Spaghetti-LEAD-1.4-dd36046ddce8481f8c75f8b9d67944ef.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                         <strong><p>P003</p></strong>
                        <p>Italian Sausage Spaghetti</p>
                        <p>Free Fires + Free Water</p>
                        <p>Rm 6.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://staticfanpage.akamaized.net/wp-content/uploads/sites/22/2021/06/THUMB-LINK-2020-2-1200x675.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                         <strong><p>P004</p></strong>
                        <p>Spaghetti Bolognese</p>
                        <p>Spaghetti+Water+Fires</p>
                        <p>Rm 9.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.justonecookbook.com/wp-content/uploads/2022/07/Ketchup-Spaghetti-Napolitan-8571-I-1-500x500.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                        <strong><p>P005</p></strong>
                        <p>Napolitan Spaghetti</p>
                        <p>Spaghetti+Water</p>
                        <p>Rm 6.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://staticfanpage.akamaized.net/wp-content/uploads/sites/22/2021/06/THUMB-LINK-2020-2-1200x675.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                     <strong><p>P006</p></strong>
                        <p>Chicken Spaghetti</p>
                        <p>Spaghetti+Chicken Chop</p>
                        <p>Rm 15.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://cookingwithjanica.com/wp-content/uploads/2021/04/mexican_spaghetti.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                        <strong><p>P007</p></strong>
                        <p>Mexican Spaghetti</p>
                        <p>Spaghetti+Water</p>
                        <p>Rm 5.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>



                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://yummyfood.ph/wp-content/uploads/2021/09/Filipino-Spaghetti.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                        <strong><p>P008</p></strong>
                        <p>Pinoy Spaghetti</p>
                        <p>Free Water</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOrPq3B5rf_NZVBqCikQ7OWvGDc3KUZgbv1Q&usqp=CAU" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                                        <strong><p>P009</p></strong>
                        <p>Spicy Spaghetti</p>
                        <p>Free Water+Chicken Chop</p>
                        <p>Rm 10.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>



                </div>
            </section>


            <section>
                <div id="section5">

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://anmourcafe.com/wp-content/uploads/2019/03/American-Salt-Plum.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <strong>D001</strong>
                        <p>American Salt Plum</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>American Salt Plum</h3>
                                <h4>RM8.9</h4>

                                <h6>Description:</h6>
                                <p>American Salt Plum </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://anmourcafe.com/wp-content/uploads/2019/03/Peaches-Pink.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>D002</Strong>
                        <p>Peaches Pink</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Peaches Pink</h3>
                                <h4>RM8.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://anmourcafe.com/wp-content/uploads/2019/03/Sunset-Romance.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>D003</Strong>
                        <p>Sunset Romance</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Sunset Romance</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://anmourcafe.com/wp-content/uploads/2019/03/Pine-Apple-Delight.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>D004</Strong>
                        <p>Pine Apple Delight</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://anmourcafe.com/wp-content/uploads/2019/03/Ocean-Lychee-1.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>D005</Strong>
                        <p>Ocean Lychee</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://anmourcafe.com/wp-content/uploads/2019/03/Soured-Passion.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>D006</Strong>
                        <p>Soured Passion</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://anmourcafe.com/wp-content/uploads/2019/03/Avocado-Milkshade.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>D007</Strong>
                        <p>Avocado MilkShake</p>
                        <p>Rm 9.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://anmourcafe.com/wp-content/uploads/2019/03/Lemon-Teatanic.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>D008</Strong>
                        <p>Lemon Teatanic</p>
                        <p>Rm 7.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://anmourcafe.com/wp-content/uploads/2019/03/Pink-Apple-Fruitmix.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>D009</Strong>
                        <p>Pink Apple FruitMix</p>
                        <p>Rm 8.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                </div>
            </section>

            <section>


                <div id="section6">

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://carlsbadcravings.com/wp-content/uploads/2017/05/Mud-Pie-4.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>DS001</Strong>
                        <p>Crazy Mud Pie</p>
                        <p>Rm 12.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://prettysimplesweet.com/wp-content/uploads/2014/04/Flourless-Chocolate-Fudge-Cake-2.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>DS002</Strong>
                        <p>Chocolate Fudge Cake</p>
                        <p>Rm 12.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>
                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://www.myweekendplan.com.my/wp-content/uploads/2018/06/matcha-lava-cake.jpg" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>DS003</Strong>
                        <p>Matcha Lava Cake</p>
                        <p>Rm 14.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>
                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBgVFBUYGRgaHCAeGxobGx0dGxsiGhoaGh0bHR0bIC0kGx0pHhoaJTclKS4wNDQ0GyM5PzkyPi0yNDABCwsLEA8QHhISHjApJCsyMjI1MDIyMjIyMjUyMjIyMjIyNTIyMjIyMjIyMDIyMjIyMjIyMjIyMjIyMjIyMjIyMv/AABEIARMAtwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAFBgMEAAIHAQj/xAA9EAACAQMDAgQDBgUEAQMFAAABAhEAAyEEEjEFQQYiUWETcZEyQoGhsfAUI1LB0QeC4fGSM2KyFSRDotL/xAAZAQADAQEBAAAAAAAAAAAAAAABAgMABAX/xAAoEQACAgMBAAIBBAEFAAAAAAAAAQIRAxIhMUFRYQQTIjJxFEKBsfD/2gAMAwEAAhEDEQA/AJ9Nop5opp9CFqvpnAwKtPeJ4pzFtIFbLeqok1MtDUFl63cqYQeaoq9em5W1NZYvMBVVs1q5mvFopUY0Jg1ZSO9QuR61Vu6tQeaDaXoVFviCnwRM1szgYqinUIWSMetCesdfFoBwJFJ+7H7KrBL6DzWZya3tr2FLy+J0e1uBzFLnS/E1+5eYASk80rzxqxl+mldM6BqbfesRARUOndtm64aXuqeJEtq0HIrQzxkaf6eUfyMlwVGopO6V4pZ/t1trvFDW27FfnW/1ETf6SQ7TIrLIzQrovVRfQMBRdAZp4ZIy8JZMUoelmsW1XkVKlUJ+nirFZXoNZWBwVLOngSeas6Yia8USK3S1FYYtEVt2qu+pC0K1/W0Qc0LMGviiq2p1yqMmlF+uPdMJPzq/quksbW8uZ5xUZ5VEtjwSl0u3euAYAJodq/ERgxQzTdZS2jKyyeJqh03TNqrhaPIDXPPPJrh1w/TRi+9GPpeovXTPIoT4l1bWrg7e1PPT7S2bVc/8e3g8NHepRls6ZaUa6vgO6bxSoshXGYrTWfCvJsDCW965tbvuSAJJ7Cmvpvh/UNFx7iWxGAxyfaBTyi4/JoyT8NdT4X1K/wDptuU9qcfBnhprdvc3P51Y6Bo79uQ5V09Rz9DRq71q3YU7gY9RSq5e+Am689KvVZW2QDXGvEDH4pzXYtRet6hZW4ATXO/EPhO8z7kYN7HBrYlUrYZy/jS9FMalhwSPlVzp9t77hNxI71u/RblsEOh+lPXgDw0f/Ub51WbSXPSau7l4NXQujrYtLHMVe014FiPSveoXig2jtSd1vrDWQbg+ZpMc9ZKgZIbQbY+OagTWIG2swmknoni97wChfMaPaXpCsxu3GIaPXArqlminRxwwyatjQIIkVlBej9QRpVXB2kj6YrKosiFeJpg17kDFDdZ1VbYlmFDesdbCeRMn8hVXpXSTqCWusfYUs8iiaGKUnwr6vrdy6dttSfeq2p6XcFs3LrGfT0pz0ujtWvKAJ/CqPizQG5ZO0xjtSxlsuBlBxdM55o+okPzApw6X4gBO240rXPGUgkHBFbKxnHNQnj2O7Hk1VHVLvRNLfG5SJPMf8UT6L063p8DilPwjorysDkhhkegq94s6ybQATkHNc+kn4W2QzdY1SFfKfwrmPi7Xh/KOZq/0/q1y84YiFBz6HtTJ17RaW5b3IEZwJAkTT44aytgyO46r5+RA6HbVV3kgP92e3vVp+uuNQu871QkFZ8p9YIob1BWVvTt7RQtTmr6qXWcznqlFHePCV8uHKsChyqlpZQQD8zHHFCfHulvC2zWyCsZHce4qv/ppr7YVhcJnbCkiV54B+63B9KetXp1dSDBBxHzqTWvg6dvp8/6bqly2cMfrRHT+J7qmdxol4k8O/DJ+GJg/lSfdQgwRVnFAU2O9nxUbrKrIOQK6PpGFm2jRAMfnXKvBegm6HdSUGTjim3xD4l+Jct2rIlVOQO54AA9qm0km/n4Gbk2l8fIb6rqoljSX4jsPcWeF7/KmPqZ2291wEfOlHq/XNyC2lCENbcvRZz2qMfBs8C+GzbUXGAzx7Ve8VXGVWUYxQrwr4pVEW27QRwD/AGoxr9MdSDHB9DSzjdUPCVPog9D1RtXTL4M96yqnX9F/Dv5JzWU2htl9jJ4h6Jb0+nLufORz3NLvhjrb2ml8rR7/AFH1BZB6SP1rna3SODFVyQvhDBKlZ04661qLmGKmjF1GCR9oVx2zq3UyGM0xdP8AF1y0ADn51KO8Ha6dE4xyKnwH+KrSrckLtPcERW/hXpLXrgbb5QfrRnW+J7V6BctL+/wpn8MX7TAfDKrHanc3LlUIsah1u0M2n0SWbatGSK5/4s0wu3AJhRljTr1rrDNbAthWCvsaDkHbIJxxFcx6p1+7be5bEEPKk9471Nx/lSDGXLY69C6Hb+EVCEGIyI5z3796Teu2LlhynKk8xkfjTr4R17OqMxkMAGMzJAhZ/pMD1zWvi/S2isswB9DH5ULpjq2cn1xfdtyfz5rVOnXO67R6tgfnzTj03pj/ABBdtqu3hWceWY5A5avdVpYc3LzfEkHDCAcxKQeARVP3UlwmsNvoP0ml1FhkVYg7bglgA0iVkekdjXW+nav4lkOQoaMhTKzmQDAnP61xnXdXl0UEhAQIkkhQYgT7TXQP9PNUGuXLSsdpJKY7DEx2JwYpab9+Rm40/wAFzWWNyk/OBx7/AOa5+/RLt7UbQhCk4JHPyroXidvhK+5d0EKAIkF52tntP0qz0DU7iVe2VIC5I7xnj3FaM/8AazSjzZGnTejDTWyIGRQXTpbsasPtkkcelOmtYPCjsK5P1zqbJqmI+7iPxpYyua+kZ24u/WMPjzWXLlsBVgGq/gboNu7LuAY9a00DXdYyB1leyj+9O+rs29Ppyls7H29ueOatkkm7fiJY04ql6zn3ivU2FufDRAOcjtFVeieKLlg7SSyfmKFdQ0N1puRI7+tDUORSRi10ecot0dMtJptWN24T3B/5rKRDcKwUbafUGsqu7+iWkfsduqJb1NsoGBPaua9S6a9lyrCR2IqbT65UbG4QcZph0niK00fFQH3pJZJfKKQxR+JCWHqRWmnK9otDfY7W2GOaC6rw44Y/CYXFHcc0VOMvwFwkl9oCHFMnhzpV+4puo21FYKDP3iJGJmPegtjRuzhCrAznHA7103oHTkS2FmPQRPt9TQnKuGhG3fwALPVGtW7lj4bm+XkkSZ9SR39sUp3bVy7d2qpLE8ek+voPnT31Tp+26l2zcKXADECdxkwMcTnBFKOp63dJdixDNO4gAE+sxQi/o01fvEE7PUXsILKvDRtcqZAzMA8SD3HrR/8A+hhbaX7hLrs3E/aBYzyZmO3tzSBogWJJE4xnEnIk+uOK6h4Y073dKN0ofNuEAhg2zYY9Asjt86Warg8JWrQtarqLXnA0yeYDKoBtG0RInCz6e/elrVam4ZDkqRwNuDmCPSe9NHT9VasXtiy6K5G6YBgxO2mLq/Tkup8QIDOfsjPyPr7U2KMWJn2hX19nJiwVoMH3GQPlT14S6kNIjagLu2+Y+YgkDasYU4JYc+tA16E9y4fIVtjzFogEH7O350U02j3W71q2GJS2h7cb13zJAiB+FNkdLhPH10xg6n1p9cnxLdvbcHl2Nw6nHlnkgkwaeei6dTYBeFZ/shsTIBxSh4e0K373w9pKKQwwylSgEgY8pEjBJmT6yOi6TSXCzi4F+GH3W9pO6I+ywiAAciD9IqUIOTbZTNlUYqKF+7auKSgEH/P9qTtf4WFx2uN9sn7NdU6xatjaS21jge8+30pD1+hvG63wjvY8GYA+dMoKPF0RZHPr4X/DsWrqWNqh9px7DmPpRbxD0e64Z0UMYwAYP50n6DQayxrbFy8phm2l53DIOCe1dbVqdQ2TUhJ5NJJxo4/0ro+oVGW5bYSTgiYzQvq3h62QTt2tXcigPalnxWli2hZhLnsOfoKqqiqZJTcpcPn06G4zlEVmI9Kyuk+HdAGNx1Qhi3pmKypbo6NTk2oEO3zNaKa3RlaS7EHtRNLlsWoUAk8074hE7fAYrGcc05dJ6fqVtC6jbfQGc0A6D0prr4HlHenq/qnREsrGTsB/vH75qU5K6L406PbXUFe2ly5aXftcFlJaSpwxQfZEyBMzmh/U+qpttOt2WCgunDEEnygHBYD+1b6LqI010ZO0bZjIEFt27Agjy4AI5qbxFbXUWUvKoZSdzADaGIJByuVpP7Po/Yrgqa7rRfIHaDnt7gUBZjz71Ld3IxA4P0OZg+tRXtsKVPbIPM9z8q6IQUfDlyZNvS1028FcEkgEwxgHythiAfvQTFdV8H9UQIqm4AquSgZypK7CCIJgTIIg8j68fRiYAAknnv2EU5eH9It66tsEwqg45aBtH4Y/Op5VXR8VPjLviLpYfWn+F/mC4d21PMdxJDYHHY59aeeheGrmlH/3F5AriDay26exHBPyH4009G0SWrSi2FB2gMwAkx2JjgUu6reb7gOAVRjMD0MHceYJB9o/CgoUtrA8zl/BeBXqehsNaz5QSFURmeIgcRSLctWdNfdLbi6xUoUQqCA45kzJjscUN/irzEPqLm4EkqjKRbHnWTvJGWKAj0HJzQ/UdVQSLqK0kqn9SbW8qSo42xwQTzOBQm2+D48aj1jn4P6QBdN347JcYH+WCQx27ASRAkZUwBzFdB1b3EssV8zqpInuRkD8eK5b0TfbuLsJZtxIKEDMAx5TIVsArB4mnnWdd1SEH+HXZ5uXIcjGxkUiDzlefSabHJNUTzQakn6ANR1Z9Ta+PAD2WDFe20GGEe2CfaaZbF9Lg/ibCywEXLff6evp60F8P2LbPcVNv8xGEcGWUg7ge80pdN1t6zd3qWXZ5XjIwSIb2kGj/WhnUm0uV8f5Oqi/bv2g6ZH5gjsfcVU6V15blx7Dwty3yv8AUDwwqHpzKtz4iYS7AdOyORKuPZuJ9YpN8WXdPptW9xlum9AIKkqBjEH0pnPlkVBOWqOo3NUoU+Ybo4nP0oN4f0u9nuXJLzw3b05pb8M+I9IUa63kvR5i5lj8ieR8qa+h6wai2L6GC36A8GhGak6Y0sbhF/8AYSvaFDkAA+orKsK0jPNZT6RZDaR8wXPC1x1D2WVgxws5Fb9P8I6kuQ6FFAknBH61to+uqm3Ym08HMg+4pps32uLJ3D8cRzUJ5JLjO1YYt7I30uke1ai2oIH2n7itLL2zZu3Hy4ICjHaGHmORmfsx7zUb9VE/Bt+dnIXnEsYg1b8Q27Fmz8MIkceTFyVP2geGSZA3SYjIpIq+lJOnQoafXE3biO0q5kx6iRIJE9zT70vR2zoxsSFM4yJYA+bOcj/4iuX9O1OzUKxUMN0FSSAZxmMjntXRtP165YtIjWw+8EkbgDEiDPYnPPt2psio2N7cEnrehKyV59InM+/GKBabROxmIHqcD8PX8KcH6wlzUj4tsKhYzBHfvIEGJn8KEdbv/wA5lBwrYkyRAiJGCPl7VSM5VRPJii3bZJotBaQMWJZxx2Uf8+59OKI+FGC3w6sSVX8AS5PrJiPxmgtzVShSM/r3/TNTeHdUbTF4mCMfMMP1ilV03IM3Hiij6K6ZpYTcTyJ9sgHIj50P8RadP4e/cXDpbeCPZCwjIxx3oFoPEN+3s01y07EnNwtg2wsm4m2ZGfwg/Kj+pcC1dJJG5cbTmSu2J9sfWnTjXDlakpWzlfUWuPaS2wQXVU703DaS25RggQ07Yz6j0kWG8zW3RVCJGAMEJvLwAQPKjCZnIJqbU6YG7cRbjl7dxgpIVkeQQRMyOGx6cZ5vdI0V7U7Dbg7mhgybdqnAckEb0ywzPcVJnclwN/6c2nNxXVSyBZ3mIAz5YmV9prrFxQywwBoN4a6Cuks/DBBLGWKjaCT6D7q+gow7RzVccNU7+TizZFKVr4OdeJelFy7kG1eVjtYTDKAIeRg+hH40X8JaA2Lbm7tLX23uDnasYB9WMkx2mmPqunFyy67ZMEr8wMVyZNdedHKsQwPBxPaiuMbs02NnU+o27eoS0sbGXlf6HyoPujDHoDVfxx0r4+jGo/8AyIwk+oPlI+sH8KGhFv6ezuBW8jfCaRk7gSpA70zWdC9/Q3tOW2uJE/MA5Hzmg11hTpL7TOOBSCR6V0r/AE660Eti0/BPlPoSeDVbQ/6a3DBuX1n0Cn9ZovpfCNzTsCpDqMyOanGDfUXyZYyWrY+H1rKF6vqD2bak22fsdokj0wK8q1nF+22fNPQtIGuAvO0GmzqXUPh22ZI25WSO8Tj3qpoQttWYwttCM92YfdH40C67127qXDOAFB8qgY/H1NS13ezOty0WqGPwDaF24zOQWksPw9Mfp70V8QdL+K5beiCYHxHn7WBCKOORMCg/QItqhbBBAIAMqSzShgyshT5cHAjmrXVOtkBIYNG4bZJGYJlSAMsSeTGB2pJPropFPVWeaHpWn00XVLvc+6zgBU+0rEIQQ4IMAyYIPBAqnqNeVu27m1YSFwPKygxBB9iBGaEdT6wbggY58vIWScSc8R3NQaO5uUBnI2njmePXimak1bFjqnwO+MelrZb+XlWMqO6g5T5gr39iDxlcTRsck/P2rr3RNAL1mwbgFwG2RuIBKgBhtk+h2mKWusdACOxtqI42+jIcc9iNw9iR6TVdWo2ibknLVsTG0ThSdpgifdsxj1q30jQXDuXbtUxlhkRkY9zTX4Tdbt029TqblvaYW3uKA9oLcj0gQcV0RvClop5BtHt79/c+9ItmqNJqMuCdqNQLRs3yC7FE2qGEztCGJI25ByfXOOHjoWqt6hA+eCHRiG2kYbKyCZA9iM0h+KunC2bdoLvZCzL5ipG+dpwM5BwcQfq1+Brx+GbbEMdqMBxtwVZdsbQcE45mtDnAZVa2Ezx1pxa1b/DdlV/MygRDNBYgnJBkEER94dqJ+Eeo7SAuZ7kyfTJPNF/9T9EG09u4PtI4XjswI9cDA7enFJPhhirH2OKjkTUx4y2h07amrUbFJ8zYUdzAk1bZARkUhXPEa27um3cEsp9pAz+VPYuiJ7etdOOalaZyZMetP7MCRSD440fwB8a2kqWJYAZBPJ+R/I/OnyydwDxk8T2B4+Va67TB0K94xTyja4CE9X0Vena6y9u3fFva8AeYQ0hNoMcEQeaNaKwVvPcjyuq/UTn86FDovxHS27bPhiYX74k5HoOKsdT6v8HU6fThfLcB80/09v0oNr5Hq3Uf/INvdVTE59ACT+VTW7qsMEGqmgvbmuT2YfTYp/zU2q0+4Sp2sOG/sfUVo+WibSujnXXfFt/S6hrRggOTnnaVlR7cj6V7Qb/VCz/Pt3CPMyww7SuJH4EfSsrlk5X6ethjjcFsjnPVrlwDZDbFPMGC3c0OsFS6hiVWRLASQJyQO5pzPV5Wbils+nAodr10rncilW5kcfiKtHIvlHJPG/sNfw9lrBl54bejhiW9HAx6wZ3eeIzlQvKBy2TIIaYXGDI579sR3ph8O6W8yHyqUEBQ0hoJbjEEHceZ7e1BetWWQsp8qkwQAPu9ifSRMTGB3FaK6GT/AI2DGEEg4MfPPMY4/tUmkP8Af/8AXNUmYn8MVc0BLMidg30B+1PtiquPCEZ3I6/4B6kp0+1mj4bg+pKvKkfmfpRPUWwXceVpMqQy/PM84rlPS+pvaJ2NBGJHerS3vituuSxzDM8DEn+x/QVJZXFU0dMsCk3JMbus9AN4G5AQgS1xj5W+mWfB49Mx3u9E8Qa3TbLV9UNoY+IfMQoxEq2TOACJoM2sZumKs7ocKQZnzkBYzmMNn0rNSlv4Y824EsJB3DzBoJOM7uY4LHsBUpTd2h441rTLXW+oLdvm5MhkGyVCuT5htMd9wWBn5YmtNQlxU+KHdAmfiBYa2dwg5IkQSCBPNK7XPi3FBbG6WGcYMFg0bTyQQe/eouo377O9hSw08h8jkAAgbiJIBHtMD2otNtK/ya1GN1+Bx8TeJU1OksIG87OWdZ+6gdAzem4kGD6GhnTkjiloIwYGI9KZdBbfaDFLO5OyMaSpFjX2mdgQcqIE9t2CfnFNWm8Rs1m3bJ8xYA95VfM31A2/7qStf1IWpLZJ4Fb9Kct51Ex5VP5sR8yfyqa2TtFGk49O19O1ouIGFXd49aQ+hvdtrzj8cVeu9b+HIdd89prrjl504nDvAp1vT/EUPaYrcSSjr2McH1U8EUq9evPqbFrUIsX9Nc/mIOVj7QHfaYVh7GmfoplZ4HpVDr2mGncam2kl2VLuT9k4mOCM5oNOSspB6uvkq9E6pFx3ZwFubSJPtTdY1iMYDAnvHauM9WYM9+0jQLDAjOBIkgH0qj4e8VPpgzNc3iZJ9Z7TRg9QThs7OweI/DdjWKBdBlTgqYNZSX4d/wBRVuai4LhK2sBJHHlk7o5JM1lFuIEsi4mznPiiyQA6rtMndtYwZyBHYCl/SX5ddwDCcgkgHB5KkED8RRF3uXPIW8vMnk+3vQsWil1QfUUIdXS2R01R0izqDbsBjtBWSu0YJj0Ugcn5Ewfml6rTXIYvudZgPmCeRO/JO0E/TJpx0u25p4e4AFiEJBzzmPsrH/WapaxNOkYlk43H1VZ8vH2hInsfaSm9KmU/bXqFHp3RHubWbyIZAc5mPRQZPz4wc4ir2o0AsttWeMue5+XYT2+XNXb2sLEkyZEYMY9vT6dqoai4WMnJnn8KEsjkaOKMPOlKxZYcjH60VRLgVlG77PmUjsPNn04BqurCRB78HB/xVxHHYRPy7Ekdj+/rSylY0VweugWlv6J7SFcqCgwMr5gQSDkRNCm1CW1GnYbiUgZUbnAbAE4OMmI4yDzR6JeKMGBYIk7gJAM8AwOD/erfiO7ZQJcVSxJFwsYEmSu0wPVT8hilc7dJDxi0usrraKXCyWy5cCJJlWgTvYggIc85GB6AXdYEuPbt/DCNBe6JJ7yogjGSeYMCvekIbru4vyqhTFsbVl1BZeSYDCJBzHao/Fl8WbR+GsPchZAzTqDu2Snki1qhZ6rqluX9oVmReyGJI5z3pn6JqrbTbth/KCWDGcYg+xzHpSHY1z2xCx/uHrzH0imTw74i3XfNbUSFXcABABGMDiqO/wDgnUa/Jav9H+NcZrrQM4/sKbPDlvT2ytvcBGACc0p+NOp21cLauESpLbOZOAPakkPBmSG5mTP15oKAspNrp9Raeza2diDSp4q2WgXUeY8D1rl3TPFr22QgPKrtIDkjtmD3JBJ+dXvFPi+5qrYtqrIoMu33jHA9hWkr9EjFp8Dlnxvd077YDCJKEwR6Ce1aL441GotXke0AGUhIOQfnSNodLcuOF3E7jBPJj3muhWdBp7FsLcuAGPs9zWt0Nqk/BSc3NNYutcjffgAEyQByT60r3GadpODn0FdXudO0LlHU73IJ2kzEfpSB1Cx8W4zlYBOAOABxTwQs5UCtDqkUNuJk8YkYNZV//wCjg9qym0Qv7rRCrmq+qXcQRzz9M/2rXTXdwqyUBU4E/nUf6s6eSiarrGU4O09o9wPyxx6zVtHDDzE+x5ntHt60MQseI/vVq0DGSfbijJGUmW22x3kd55Hy4FQXLscSD7TUbsAMt+dVr3UI+wPxPvSxg2wyyJIvkORuJIAxJ5PtRXRXg6KW2+QyzYYFFUAhsYhQMZ+Xqou7tBZiZ4k/27Cnnwb0OP5lxRPGe0ggj8R+tGcdV6bHPZ+BXonT7Xwy7gsIkA4XzwRIYDdjb/fNZqdFv093aAYtltoEBRHlHpMkVZ65YVbPw7aqu5xKrgBZ3FsfIijejtKukRFtuDd8zlhBgEhRn7vp680mOGzHyz1Vi34I6dcto1xtvw2TzHcAUPKkg8jkYrfx3ori20ubQygypUgifeKH+M9QyN/DaYsUKD4jSInJIEY2jEk5kGqnhXqoMWrzMU4OZVvYg4xyCIPzq0mkc6i27FBbTu5AG5uaYOgX7aFCdsh4IJH3sE/hVzxF0H+EuFhDKxOwr6HI/Gln+B3RzQjLZcNNKP8Ak269bRbzi2dy7jn5n1qlbssxAGJ9feiS9OkbauWtEBVF4TclYGYEAoqndP2vl6Vd0qXFEs3lGcj9aLpo+MCr9rSKRtiR3rNXwG7uwb4b6k9q62oZQbcgNkYk4IFdQ1HSdNrLfxNgYlZBmD/1SHa6bbU+VKLaC3cXCl1HoCY+lDR/AXkTZF4S6StnVl7pUJDAe04qO909fjOtvK7zHymrrrcDbZww7CjPSOmSRijBfAmSVuzOleHARLDmspvjYgjmvKoTPl+2xRqJWrvpVS9b7VDbuFT7VKcNi+Oevpev2g2QYNSW7SG2f5gVhxM+bjyiB+scVCjg5mtVthpKikXnSzpvhVu2nGWBjsTxUI5pm6NnyOoK+jAEDIyQeR9at6rwfF4qrwnJBBkCN0CAZ9vmPnTLKrpiz/TvjXSj4c6W15wzHAwJMAxEgTycjA9a6hpbS27apg5EEZbhgR7d5B/pFVOi9OFtI80LlFncBGJX0kESB7egoipOZie3sAK5cs9nZ044aqhZ8RPqLZS6U22g8A4JkTG70Bz9KKdT8XFtObgywGWPAiPKPc8Up+ILztca38TcS0lZwgUBQSO05MfL1qgVLoqEDavHuTMk+vNWx2lSJZXG7fppq+tai5aCBRG0IGIAbaJwB2kmSe9VLOhuFQJAx29RxxRGzp80X02kPpNW1Ob9xg93uPbW27lgpn8YivU02OM0d0/SyScVJ/Bt8Q2/hPEfb+7W0UfAbOT6AVs54qVNM3ajDaAirFjRyeKOomwM0+iJiRRGz0496O6LQev0ovb6duFNQLF7RaCWgqRHc8GmDSdOEGQKs2tKEgGTmOP1q8wiBgSYGc8TiiAEt09QcKJHeimk06qK92ZqSylFGPNTx8qyvbrxzWUbMfPnVdAVJMUDvWfauhdRRfsvAPY+v/NKOv021jU2OmApK8Vf0dzHv3qK7aqAShkUJR2Q0JasNI3vRzp/XSIW4ZjCvMHOCGx5scExBApWtXw3GD6VcsgYrllCvTsjOzrGjcMvliJEQZ7ATiq+sfYrXGb7IMCMnnFLfhS+3AyzcjsYI7cDE1c8Ya0W0gZd5UA8DyjI7cHPvU1G30tKVLgj6IvcuFiC7sxJjJJmmS1onwdjD2KkH6Ee9XfCHTF04S/eU7WbauMcEwaN67Vvccu58x4A4AGIA7Diu2COHLLxAG1oiTkUZ0umIj5Z9qs6PST70a0XTwpBzPvVDnbIdNpQFkgyPzx2qyNJOT6UTRIAxWLbiSPXIrABb9NWPavLWgAMTnt7UYFoE547VMlmDwKxipY0gHNENOBFbfDivUQ8nFYxrsMk9q1cgnIGMj1BrYMQYjHrWsd8e9FIxtIqJHng96mQgiolUKIArfJjTUoTH51lSoHKiIBnO70z6H5VlYxy3VJ8THeCQJyYyQPeljW95Ge4PanbXaAOBJEcqQYz2II/GgWq6RzJZuwkCRx3ilYyE67bqm9qmi50tu1Uz01s4oJDC29ruKkt6phgif1opd0Brax07Mmg6foU2vBi8L65EEjeCRJ3RA9Qojv/AHrxrDX9avxMoqbiJ4UGWAnntivek6OSBR65YCeWJPrjv6Uix14WeZv0p9V19245tafcUt3DtnbA/DgtA96NWrE7QNzQANxiSYkn6k1V0OlAgAYmfx9fnTH0/R4/tTQg11kck0+JEnTtHFGETH/Fa2rUfv2qZx3/AOeccVQkbC2K9CHNbpbqYW6xislvOZ/GpXtmDHNbKse/pWwaPxrGI1Iic/OsYmcHmpGArxEHGcCsYxv2KrqnqYJJwKtmq95jPyooB7pu4qTYCZqO0INTgZrMJ5aBzIgV7Wb/AGrKBjiPRPE6uoW5HI54J944Pvz6zThprtp8kE8ws8+4j7YHOM+oFcKVipkYpg6T4muWvK2V9Dkf8UK7Yx0RdILjkDmfl+BByPpUV7QpvITidox6Dn3mPzqHpniC1dAkifRvtcfdfv8A7u/3qMJaQg7GzMgMYIHBjB3D3zRACn6OrRj6DP744qqembTxI9aZZOBH7+f75rREg55/Sf2a1GsoaHTBc94+lWfgEmT+4qf4P7/f1qzp7ZGTwPp85H7zWNZvotN6/uPl8v1o3ZTsJH7/AOKqaY+owPTPEiiS5/f+O9YB6BiI/f8A3VhEkQarI4JxyuPTn2nFWFf0+ny/f51jEhX0rdBgzUYf1rEcye//AHWMSsPQ814wxmvN/fj/AKzSxd65cbWNbtktZSFYoskuCdwJIwowMRknNBuhoxb8GZ3+QrEeeM1EEyTEcYrb4gGJ+lMhCcP+FRO32hFRNcC5Pf8AeK3N7GKASILGD2qQvFQu8mP3++KnsLPaiY2msrS9qbaE7mlv6FBZvnAyBWVqAfL13RMoyR+/T1qo6RTfqNBuB9RiPxAA9OaDazR8BRBjPv8A4oD0C7V9kPlMUw9L8UvbgNkehyv/ABQG7YioGWKxjq/SvFltok7Z9fMv15n5k/KmbS9QtXIjv6eYZB4jzDMdgK4JbcrkEj5Vf0nWLlvvP5H8qADvVuwrQVKt67SPX/oVMtrbiP37n8Yrj+i8ZOI3Hj1E/Q9qaumePoiTI+YPee8mKNmpj3bIzlTHPtJ/ZqTfHAMn9/nH77LNrxdZcydoOJxGBz5sn8qv2uqWD94e8Ef3Iz+FYAdQxGfme/z49hXq3Nvv/wA881Rs622Rhz9Cf0BFTF7bfe4IIwe0x+VYxdF79/vFRteyJI9QO+MVRvrauDY888gusT/7lIPEjmtbfS9Olz4ilQ+3afOxkZ5BbzRPPIzQ6Hhfe5JndjjadoA/9wMTJ9zFQB0t7mAgscn+rHtyYA+lblLU7txJ9lY49oFV3t21EqXn1IbPt/Mx7U3AEo1cZYH9/v8AWp0cHIOP3/mqb9VsJksq+m5lH/wLVBqfEVpQD8S0oYSJJJIkiRu24kcxGDE1gBd0kfvH7/tXrMqiHcAngE+b8ByTmkLW+OhtcpuZU+0d6qokkD7ETJBgZmDS+vi29fZktlUUKzuwG0KqRJJjc3oPUkDvWNR1K/1i1aG4gCPvOwQfmNxOP6aWuq+OraghXZ/a35F/8p3n8DFc614vuyEuWW4JRlVmLeZkIM8MCpG0TOIkGrN3w/ctE7yAwYKGOQ7ESQn9Ud4wMeonWEt3fEV++xS2dg5MSvvz3MxWVLc6c7hPh+YkQxAPlIlvMPWNo79+K8rUCyzqNOoYcxtE8ABoMZGOCAM80PuaGWI/CfT94x70WW8RGfKxG6B5RmUxEDEEYjyx2qOzbGQDG05kTIwOcSRnGDHzNAqLlzpgYsB2nLYkTzgfvFB9R06ODPt/mnW5bDSMyQRkCCBzHf8AX8qhfRjaeB5s4MkAcH61gCI+kIyRzx+lVzZPpxTuel703giQYIPqSO/f1qi/TsExwIHvMfXvWCKMVgFH7nTJmRB9KrjpTcRn8f8AFYGoOTUuvDN9as2uqXRwR9P8VYbphjggDv2+VaN0xvSPxoAolt+Irq/9kVateK7o/qj2b/Ioe3TnH3QfevLHTrhkAHPb1gT+NENBhfGl3+p//Ktz43vf1P8AiwoMekvBaPKOTW1npLGZBjuT2+tYFF9/GF8/ef8A8jVO54kvMefzJrL/AE4AQgJ/q57E/lkcelWendIJLMQCAO8gcbv0B+orUBl7Q9fVrLfFsB3BGwK9xVk7QzP5v6Qfs9yMCJq5pkL3W1RW44LeRCFC242hYEtu2KVC+UZCmD9mtNF06c2yOSIYAhuM4z8oq1p9DBC9zJZScBd04jI+8INGgMJam5cO+2lp3+J9s7wGh1ZGEngBAqgGZ+HMyxJE6PoRFtlAuDc67xsXdAgqhUPgEnd3mEgYFE7CGdoVSjR6j1+0AY+9z6VebTM2FAwQI+4IAxkg9+3Oe80dTE3SrrJbS3bsOETcAisNxIdizH+pvtZEQWJWMQZXWllCtbIYAHkSfsNIgQDJLDEAkYMQKtvpEW1bbDEAgRGVUgxIkTjn9avaS2xhgSAJ7ejAEAHB7zRoVsoNo97uS5QMcCYUQTJbME9hjg+01lMP8OrkHacCTK4MyOD9ZrKILEK0vktt3LZ94Lcjg1Se4Y59P1rKykRZheygNtDHIeffaSB9Jr1kHw7ZzJWTk5O3mOK9rKX5D8AxEAXj1/QCrBtggyOOPbzVlZTilSzaBEx+4Y/2q1pdFbYgFfQ8kcfI1lZS/I6LA0Nv+HnYswMxnOaELbAnHaPX9aysrBPTpUGNuNxwc8L7/OpbFhQykAD+Z/c1lZWFCFrR23V9ygwY9O4Hb5VRuWV/miBAPHyFZWVgF/T6O2qkhQCLcz/tr3qKBVJAgyc/7T/k1lZTCFXS2lCBoG4Hnv8Aaiit6ypUNAnaTPvuOaysooDCeh0abT5Rz/8A1/iqnUW8giBBnAA+8R29q9rKIga0f2AfUj9RUu7+WD3MyfWRXtZWMZYumSZyAwB9BuTH51lZWVjH/9k=" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>DS004</Strong>
                        <p>Crispy Chocolate Waffle</p>
                        <p>Rm 14.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>
                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://mykori.my/wp-content/uploads/2020/10/MYKORI-COOKIE-1536x1195.png" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>DS005</Strong>
                        <p>Signature Mykori Cookie</p>
                        <p>Rm 9.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://mykori.my/wp-content/uploads/2021/04/Strawberry-Chocolate-1536x1195.png" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>DS006</Strong>
                        <p>Chocolate Strawberry Buttermilk Waffle</p>
                        <p>Rm 12</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://mykori.my/wp-content/uploads/2021/04/Chocoreo-Toast-1536x1195.png" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>DS007</Strong>
                        <p>Triple Chocoreo Buttermilk Waffle</p>
                        <p>Rm 12</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://mykori.my/wp-content/uploads/2021/04/Mango-Passion-2-1536x1195.png" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>DS008</Strong>
                        <p>Mango Passion Buttermilk Waffle</p>
                        <p>Rm 6.9</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>


                    <button class="list-group-item list-group-item-action " data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                        <img src="https://mykori.my/wp-content/uploads/2021/04/Chocolate-Banana-1536x1195.png" width="75px" height="60px" style="object-fit: cover;
                                    float:left;
                                    margin:0 5px">
                        <Strong>DS009</Strong>
                        <p>Chocolate Salted Caramel Buttermilk Waffle</p>
                        <p>Rm 12.5</p>
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Chicken Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">

                            <div class="container">

                                <h3>Chicken Chop</h3>
                                <h4>RM6.9</h4>

                                <h6>Description:</h6>
                                <p>Sushi is a Japanese dish </p>


                                <form>

                                    <h6>Remark:</h6>
                                    <div>
                                        <input type="checkbox" id="NoEgg" name="NoEgg" value="NoEgg">
                                        <label for="NoEgg">No Egg</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoSeaweed" name="NoSeaweed" value="NoSeaweed">
                                        <label for="NoSeaweed">No Seaweed</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="NoVineger" name="NoVineger" value="NoVineger">
                                        <label for="NoVineger">No Vineger</label>
                                    </div>

                                    <h6>Other Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;  min-height: 75px;"></textarea>


                                    <div class="d-flex mt-2 mb-2 justify-content-center">

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onKeyDown="return false" style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                    <center><button type="submit" class="btn btn-warning" style="width: 100%;">Add to Cart</button></center>
                                </form>

                            </div>


                        </div>
                    </div>

                </div>
            </section>

        </div>
    </ul>
</div>

<div class="fixed-bottom">
    <center>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">View Order</button>
    </center>
</div>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">View Your Order</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">

                <!-------------------------------------------------Logo Page---------------------------------------------------->

                <img src="images/logo.png" alt="GCLogo" style="resize: none; margin: auto; width:100%; min-height: 75px;">

                <!----------------------------------------------显示Order-------------------------------------------------------->
 
             

                <br>

                <!---------------------------------------------Step Roll-------------------------------------------------------------->

                <div class="stepper-wrapper" style="resize:none; text-align: center; overflow:scroll; margin: auto; width:100%; min-height: 75px;">
                    <div class="stepper-item completed">
                        <div class="step-counter">1</div>
                        <div class="step-name">Received Order</div>
                    </div>
                    <div class="stepper-item completed">
                        <div class="step-counter">2</div>
                        <div class="step-name">Food Done</div>
                    </div>
                    <div class="stepper-item item">
                        <div class="step-counter">3</div>
                        <div class="step-name">Food Delivered</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">4</div>
                        <div class="step-name">Payment</div>
                    </div>
                </div>
                <div>
                <hr class="hr">
                
<ul class="list-group list-group-flush">

    <li class="list-group-item d-flex justify-content-between align-items-center">

        <div class="d-flex align-items-start">
            <div class="ms-3">
                <div class="fw-bold mb-1">Burger</div>
                <div class="fw-light mb-2">Vegetarian</div>
            </div>
        </div>
        <div class="d-flex align-items-end">
            <div class="fw-light">x1</div>
        </div>
    </li>

    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-start">
            <div class="ms-3">
                <div class="fw-bold mb-1">Sushi</div>
                <div class="fw-light mb-2">No Egg,No Prawn</div>
            </div>
        </div>
        <div class="d-flex align-items-end">
            <div class="fw-light">x1</div>
        </div>
    </li>

    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-start">
            <div class="ms-3">
                <div class="fw-bold mb-1">Happy Meal</div>
                <div class="fw-light mb-2">No Burger,No Chicken</div>
            </div>
        </div>
        <div class="d-flex align-items-end">
            <div class="fw-light">x1</div>
        </div>
    </li>

    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-start">
            <div class="ms-3">
                <div class="fw-bold mb-1">Chicken Chop</div>
                <div class="fw-light mb-2">No Chicken</div>
            </div>
        </div>
        <div class="d-flex align-items-end">
            <div class="fw-light">x1</div>
        </div>
    </li>

</ul>

</div>



            </div>

            <!---------------------------------------------Payment Button-------------------------------------------------------------->

            <div class="modal-footer">
                <a href="payment" style="width: 100%;"><button class="btn btn-primary" style="width: 100%;" id="payment"> Payment</button> </a>
            </div>

        </div>
    </div>
</div>

<style>
    .list-group-item.list-group-item-action img {
        width: 100px;
        height: 95px;
        object-fit: cover;
    }


    .list-group-item.list-group-item-action p {
        font-size: 13px;
        line-height: 10px;
    }


    .list-group-light .list-group-item {
        height: 130px;
    }

    .fixed-bottom {
        display: none;
    }

    .offcanvas-body {
        padding: 0;
    }

    .offcanvas,
    .offcanvas-lg,
    .offcanvas-md,
    .offcanvas-sm,
    .offcanvas-xl,
    .offcanvas-xxl {
        --mdb-offcanvas-height: 50vh;
    }



    .btn-warning {
        width: 80%;
        font-size: 10px;
        margin-bottom: 10px;
        background-color: #fb7e23;
        border-color: #fb7e23;
        color: white;
    }


    .btn-warning:hover {
        color: white;
        background-color: #fb7e23 !important;
        border-color: #fb7e23 !important;
    }

    .btn-warning:active {
        color: white;
        background-color: #fb7e23 !important;
        border-color: #fb7e23 !important;
    }

    .btn-warning:focus {
        color: white;
        background-color: #fb7e23 !important;
        border-color: #fb7e23 !important;
    }

    a:hover {
        text-decoration: none;
    }

    p {
        font-size: 5px;
        line-height: 2px;
        margin-top: 5px;
    }

    .stepper-wrapper {
        margin-top: auto;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .stepper-item {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;

        @media (max-width: 768px) {
            font-size: 12px;
        }
    }

    .stepper-item::before {
        position: absolute;
        content: "";
        border-bottom: 2px solid #ccc;
        width: 100%;
        top: 20px;
        left: -50%;
        z-index: 2;
    }

    .stepper-item::after {
        position: absolute;
        content: "";
        border-bottom: 2px solid #ccc;
        width: 100%;
        top: 20px;
        left: 50%;
        z-index: 2;
    }

    .stepper-item .step-counter {
        position: relative;
        z-index: 5;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #ccc;
        margin-bottom: 6px;
    }

    .stepper-item.active {
        font-weight: bold;
    }

    .stepper-item.completed .step-counter {
        background-color: #4bb543;
    }

    .stepper-item.completed::after {
        position: absolute;
        content: "";
        border-bottom: 2px solid #4bb543;
        width: 100%;
        top: 20px;
        left: 50%;
        z-index: 3;
    }

    .stepper-item:first-child::before {
        content: none;
    }

    .stepper-item:last-child::after {
        content: none;
    }
</style>

<script>
    if (localStorage.getItem('button') === 'clicked') {
        $(".fixed-bottom").css({
            display: "block"
        });
    }
</script>

@endsection