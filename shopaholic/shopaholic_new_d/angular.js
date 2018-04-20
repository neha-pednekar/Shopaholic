angular.module('app', []).controller('ctrl', function($scope, items) {
  $scope.items = items;
  $scope.cart = [];
  

  $scope.deleteItem = function(item) {
    var cart = $scope.cart;
    var match = getMatchedCartItem(item);
    if (match.count > 1) {
      match.count -= 1;
      return;
    }
    cart.splice(cart.indexOf(item), 1);
  }

  $scope.addItem = function(item) {
    var match = getMatchedCartItem(item);
    if (match) {
      match.count += 1;
      return;
    }
    var itemToAdd = angular.copy(item);
    itemToAdd.count = 1;
    $scope.cart.push(itemToAdd);
  }

  function getMatchedCartItem(item) {
    return $scope.cart.find(function(itm) {
      return itm.id === item.id
    });

  }
  $scope.getTotal = function(){
    var total = 0;
    for(var i = 0; i < $scope.cart.length; i++){
        var product = $scope.cart[i];
        total += (product.price * product.count);
    }
    total+=0.0625*total;
    var newdis=getDiscount();
    total-=(newdis/100)*total;
    $scope.tot=total;

}

$scope.promo=function(){
  var soup=$scope.dis;
  if(soup=="DISCOUNT5" || soup=="DISCOUNT10" || soup=="DISCOUNT15" || soup=="DISCOUNT20")
  {
    $scope.dismsg="Promo code added";
  }
  else
  {
    $scope.dismsg="Invalid Promo code";
  }
}


$scope.myClick=function(){
  $scope.myTxt = "Hope you had a great time shopping with us!";
  alert("Thanks for shopping with us! Your items will be shipped when ready!");
}
/*
$scope.userPattern=function()
{
  var regexp = /^[a-zA-Z]*$/;
  if(!regexp.test($scope.user)){
    $scope.displaymsg="Inavlid address";}
    
}

$scope.cityPattern=function()
{
  var regexp = /^[a-zA-Z]*$/;
  if(!regexp.test($scope.city)){
    $scope.displaymsg="Inavlid city";}
    
}

$scope.statePattern=function()
{
  var regexp = /^[a-zA-Z]*$/;
  if(!regexp.test($scope.state)){
    $scope.displaymsg="Inavlid state";}
    
}

    
    


$scope.zipPattern=function()
{
  var regexp = /^\d{6}$/;
  if(!regexp.test($scope.zip)){
    $scope.displaymsg="Inavlid zipcode";}
    
}
*/
 
function getDiscount(){
  var newj=$scope.dis;
  if(newj=="DISCOUNT5"){
    return 5;
  }
  else if(newj=="DISCOUNT10"){
    return 10;
  }
  else if(newj=="DISCOUNT15"){
    return 15;
  }
  else if(newj=="DISCOUNT20"){
    return 20;
  }
  else{
    return 0;
  }
}




    

}).factory("items", function() {
  var items = {};
  items.data = [{
    id: 1,
    title: "Item 01",
    price: "230"
  }, {
    id: 2,
    title: "Item 02",
    price: "300"
  }, {
    id: 3,
    title: "Item 03",
    price: "120"
  }, {
    id: 4,
    title: "Item 04",
    price: "600"
  }, {
    id: 5,
    title: "Item 05",
    price: "400"
  }, {
    id: 6,
    title: "Item 06",
    price: "190"
  }, {
    id: 7,
    title: "Item 07",
    price: "500"
  }, {
    id: 8,
    title: "Item 08",
    price: "470"
  }, {
    id: 9,
    title: "Item 09",
    price: "570"
  }, {
    id: 10,
    title: "Item 10",
    price: "490"
  }];
  return items;
});

if (!Array.prototype.find) {
  Array.prototype.find = function(predicate) {
    if (this == null) {
      throw new TypeError('Array.prototype.find called on null or undefined');
    }
    if (typeof predicate !== 'function') {
      throw new TypeError('predicate must be a function');
    }
    var list = Object(this);
    var length = list.length >>> 0;
    var thisArg = arguments[1];
    var value;

    for (var i = 0; i < length; i++) {
      value = list[i];
      if (predicate.call(thisArg, value, i, list)) {
        return value;
      }
    }
    return undefined;
  };
}

