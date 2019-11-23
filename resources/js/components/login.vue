<template>
    <div class="w-25 login">
        <h2 class="mb-3">Login</h2>
        <form>
  <div class="form-group row">
    
    <div class="col-sm-12">
      <input type="text" class="p-2 form-control" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="form-group row">
    
    <div class="col-sm-12">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
     
    </div>
    
  </div>

  <div class="row">
      <div class="col-sm-12"><button type="submit" class="mb-3 w-100 btn btn-md btn-primary">Login</button>
      <router-link to="/register">Create New Account</router-link>
      </div>
      
  </div>

  
</form>
    </div>
</template>

<style lang="scss">
    .login {
        
        margin: 150px auto 0px;
        text-align: left;
    
    }


</style>