<template>
    <div class="w-25 login">
        <span><router-link to="/login">back</router-link></span>
        <h2 class="mb-3">Create New Account</h2>
        <form>
  <div class="form-group row">
    
    <div class="col-sm-6">
      <input type="text" class="p-2 form-control" id="firstName" value="first name">
    </div>

    <div class="col-sm-6">
      <input type="text" class="p-2 form-control" id="lastName" value="last name">
    </div>

  </div>

    <div class="form-group row">
    
    <div class="col-sm-12">
      <input type="text" class="p-2 form-control" id="staticEmail" value="example@email.com">
    </div>

    </div>

  <div class="form-group row">
    
    <div class="col-sm-12">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>

  <div class="row">
      <div class="col-sm-12"><button type="submit" class="w-100 btn btn-md btn-primary">Create New Account</button></div>
      
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