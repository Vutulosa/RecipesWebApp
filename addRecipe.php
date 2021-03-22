<form>
            <h4 class="mt-2">Details</h4>
            <div class="form-group">
              <label for="exampleFormControlInput1">Recipe Name</label>
              <input type="recipe-name" class="form-control" id="exampleFormControlInput1" placeholder="Name of a recipe...">
            </div>
            <div class="form-row">
              <div class="form-group col-6">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Other</option>
                </select>
              </div>
              <div class="form-group col-6">
                <label for="exampleFormControlSelect1">Servings</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                </select>
              </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Insert a short description of the recipe..."></textarea>
            </div>
            <h4>Ingredients</h4>
            <div class="form-row">
              <div class="form-group col-4">
                <input type="text" class="form-control" placeholder="Quantity...">
              </div>
              <div class="form-group col-8">
                <input type="text" class="form-control" placeholder="Ingredient name...">
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-info" type="button">Add Ingredient</button>
            </div>
            <h4>Steps (Method)</h4>
              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Insert number of minutes...">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Minutes</span>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Describe step..."></textarea>
              </div>
              <div class="form-group mb-0">
                <button class="btn btn-info" type="button">Add Step</button>
              </div>
          </form>