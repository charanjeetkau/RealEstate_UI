<?php
include "nav.php";
?>

<div class="col-md-10">

<div class="main">


<main class="main-content bg-body-secondary pt-3 py-4">
      <div class="text-center text-grey">
        <h1 id="head" class="text-capitalize p-2 fs-3 fw-bolder text-center" style="color: grey; text-shadow:3px 3px 3px #A5D7D7; ">commercial</h1>
      </div>
        <div class="rounded mt-4 ms-3 p-">
          <form method="post" action="commercial?for=commercial&user=pradeep" enctype="multipart/form-data">
            <input type="hidden" name="csrfmiddlewaretoken" value="B3Y4wAuIDWF1qT5ng8sbuzHLa18dsOkg0p54HpcK9y8tFUdReXw1w9bk20kAk3fz">
            
            <div class="neex justify-content-between my-4 mx-2">
              <div
                class="btn-group"
                role="group"
                aria-label="Basic radio toggle button group"
              >
                <input
                  type="radio"
                  class="btn-check"
                  name="btnradior"
                  id="sellr"
                  onclick="prsho()"
                  value="sell"
                  autocomplete="off"
                  checked
                />
                <label class="btn btn-outline-primary btnBgColor" for="sellr">Sell</label>

                <input
                  type="radio"
                  class="btn-check"
                  name="btnradior"
                  id="rentr"
                  onclick="rentshow()"
                  value="rent"
                  autocomplete="off"
                />
                <label class="btn btn-outline-primary btnBgColor" for="rentr">Rent</label>
              </div>
            </div>


            <div class="d-block">
              <input
                type="number"
                name="area"
                class="form-control  my-3"
                placeholder="Area"
                required
              />


              <div
              class="btn-group  d-block my-4 mx-2"
              role="group"
              id="corporate"
              aria-label="Basic radio toggle button group">
              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio5"
                value="shop"
                autocomplete="off"
                checked/>
              <label class="btn btn-outline-primary btnBgColor" for="btnradio5">Shop</label>

              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio6"
                value="showroom"
                autocomplete="off"
              />
              <label class="btn btn-outline-primary btnBgColor" for="btnradio6"
                >Showroom</label
              >

              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio7"
                value="office"
                autocomplete="off"
              />
              <label class="btn btn-outline-primary btnBgColor" for="btnradio7"
                >Office</label
              >

              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio8"
                value="warehouse"
                autocomplete="off"
              />
              <label class="btn btn-outline-primary btnBgColor" for="btnradio8"
                >Warehouse</label
              >
            </div>
              </div>

            <div class=" my-2 w-100  neex">
              <input
                type="number"
                name="floor"
                class="form-control floor"
                placeholder="On Floor"
                required
              />

              <div class=" w-100 my-2  neex">
              <span class="input-group-text p-0 " id="basic-addon1">

              <input
                type="number"
                name="tfloor"
                class="form-control floor "
                placeholder="Top Floor"
                required
              />
            </span>
            </div>

            <div class=" w-100 my-2  neex">
              <span class="input-group-text p-0 " id="basic-addon1">
                <input
                  type="number"
                  name="price"
                  id="price"
                  pattern="^\d*(\.\d{0,2})?$"
                  class="form-control"
                  placeholder="Price"
                  required
              /></span>
              <span id="deposite" style="display: none;margin-left: 2%;">
                <span class="input-group-text p-0 " id="basic-addon1">
                  <a
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Deposite"
                  >
                    <i class="fa fa-info px-2"></i
                  ></a>
                  <input
                type="text"
                value="0"
                name="bhk"
                required
                class="form-control w-25 ms-4 d-none"
                placeholder="Owner's email"
              />

                  <input
                    type="number"BNM,L
                    name="deposite"
                    required
                    value="0"
                    pattern="^\d*(\.\d{0,2})?$"
                    class="form-control"
                    placeholder="Security " /></span
              ></span>
            </div>
            <span class="input-group-text w-100 my-2 floor" id="basic-addon1">
              <a
                href="#"
                data-toggle="tooltip"
                data-placement="top"
                title="Enter Building Name"
              >
                <i class="fa fa-info px-2"></i
              ></a>

              <input
                type="text"
                name="project"
                required
                class="form-control"
                placeholder="Project name"
              />
            </span>

            
            <textarea
              type="text"
              class="form-control w-100 my-2 text-left"
              placeholder="Description"
              name="desc"
              style="height: 100px"
              style="overflow-y: scroll"
            ></textarea>
            
           
              <input
                type="text"
                name="location"
                class="form-control w-100 my-2"
                placeholder="Location of Property "
                required
                style="width: 560px"
              />


              <input
              type="file"
              name="img"
              class="form-control w-100 my-2 chooseFile"  
            />



            <input
              type="text"
              name="city"
              class="form-control w-100 my-2"
              placeholder="City"
              required
            />
            <br/>
            
            <span class="d-flex justify-content-center my-3">

              <button type="submit" name="submit" class="btn fw-bolder progress-bar-striped progress-bar-animated text-light btn-success rounded-pill w-75  p-3">
              POST
            </button>
            </span>
            
            
            
          </form>
  
      </div>
    </main>

</div>
</div>
</div>
</div>

</body>
</html>






<script type="text/javascript">
  var slider = document.getElementById("myRange");

  function valuebhk(data) {
    localStorage.setItem("bhk", data);
    const bhk = document.getElementById("bhte");
    bhk.innerText = data;
  }
  function area(data) {
    localStorage.setItem("area", data);
    const area = document.getElementById("arte");
    area.innerText = data;
  }
  function sell(data) {
    const show = document.getElementById("show");
    show.innerText = data;
  }

  function displ() {
    let fil = document.getElementById("filter");
    if (fil.style.display == "none") {
      fil.style.display = "flex";
    } else {
      fil.style.display = "none";
    }
  }
  function need(data) {
    let areabtn = document.getElementById("area");
    let bhkbtn = document.getElementById("bhk");
    let sh = document.getElementById("ned");
    sh.innerText = data;
    if (data === "Residential") {
      bhkbtn.style.display = "";
      areabtn.style.display = "none";
    }
    if (data === "Corporate" || "Land") {
      bhkbtn.style.display = "none";
      areabtn.style.display = "block";
    }
  }
  function work() {
    let bhk = document.getElementById("bhte");
    let area = document.getElementById("arte");
    let link =
      "?type=" +
      ned.innerText.trim() +
      "&bhk=" +
      bhk.innerText.trim() +
      "&area=" +
      area.innerText.trim() +
      "&status=" +
      show.innerText.trim();
    console.log(link);
    window.location.href = link;
  }

  let x = document.querySelectorAll("#price");
  for (let i = 0, len = x.length; i < len; i++) {
    let num = Number(x[i].innerHTML).toLocaleString("en-IN");
    x[i].innerHTML = num;
    x[i].classList.add("₹");
  }

</script>

<style>
  div.scroll {
    width: 80%;
    max-height: 100px;
    overflow-x: auto;
    overflow-y: scroll;
    margin-bottom: 10px;
  }
</style>