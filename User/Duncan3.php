

<form action="index.php" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Register</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>

                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="phonenumber">Phone Number</label> 
                  <input type="number" id="phonenumber" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="location">location</label> 
                  <input type="text" id="location" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Select type of Business you have</label> 
                 <select name="business_nature" class="form-control">
                      
                        
                       <option>Physical Business</option>
                       <option>Online Business</option>
                      
                   </select>
                 
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Describe your Business</label> 
                  <textarea name="business" id="business" cols="30" rows="7" class="form-control" placeholder=" Describe your Business"></textarea>
                </div>
              </div>
            <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="phonenumber">Have you ever asked a professional to manage your Business</label> 
                 <input type="radio" name="response" value="YES" id="yes" checked="checked" / style="height:50%;">
                                    <label for="yes">YES</label>
    
                                    <input type="radio" name="response" value="NO" id="no" / style="height:50%;">
                                    <label for="no">NO</label>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="submit Details" name="send" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>