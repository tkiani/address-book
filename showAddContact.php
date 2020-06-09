 <!-- display add contact -->
 <div class="container-fluid" id="add-form" >
        <form>
            <fieldset>
              <legend>Add a new contact</legend>
              <div class="form-group">
                <label for="exampleInputPassword1">*First Name</label>
                <input type="text" class="form-control" id="first-name" placeholder="First Name">
              </div>
              
              <div class="form-group">
                <label for="exampleInputPassword1">*Last Name</label>
                <input type="text" class="form-control" id="last-name" placeholder="Last Name">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">*Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="123-45-678" pattern="[0-9]{10}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
             
       
              <fieldset class="form-group" >
                <legend>Contact Type</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="family" checked="">
                    Family
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="friend">
                    Friend
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="colleague">
                    Colleague
                  </label>
                </div>
                <br>
          <small id="emailHelp" class="form-text text-muted">Fields marked * are required.</small>
              </fieldset>
              <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>

    </div>
            </form>
      </div>