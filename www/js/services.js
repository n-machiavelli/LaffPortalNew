angular.module('starter.services', [])

.factory('User',["$timeout","$firebaseSimpleLogin","CacheFactory",function($timeout, $firebaseSimpleLogin,CacheFactory){
  //next 2 lines for angular fire
  var ref=new Firebase("https://dazzling-fire-6822.firebaseio.com/");
  var auth=$firebaseSimpleLogin(ref);
  var user={};
  return {
    login: function(email, password, callback){
      auth.$login('password',{
        email: email,
        password: password,
        rememberMe: false
      }).then(function(res){
        user=res;
        self.staticCache = CacheFactory.get("staticCache");
        self.staticCache.put("user",user);
        if (callback){
          $timeout(function(){
            callback(res);
          });
        }
      }, function(err){
        callback(err);
      });
    },
    register: function(email, password, callback){
      auth.$createUser(email, password).then(function(res){
        user=res;
        self.staticCache = CacheFactory.get("staticCache");
        self.staticCache.put("user",user);        
        if (callback){
          callback(res);
        }
      }, function(err){
        callback(err);
      });
    },
    getUser: function(){
      return user;
    },
    logout: function() {
      auth.$logout();
      user={};
        self.staticCache = CacheFactory.get("staticCache");
        console.log(self.staticCache.get("user"));
        self.staticCache.remove("user");   
        console.log("after")   ;
        console.log(self.staticCache.get("user"));
    }
  }
}]);

