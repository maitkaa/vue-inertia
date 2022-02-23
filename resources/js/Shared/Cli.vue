<template>
    <div class="container">

        <div class="wrapper bar">
            <div class="btn close-btn"></div>
            <div class="btn min-btn"></div>
            <div class="btn max-btn"></div>
        </div>

        <div id="screen">
            <p class="font">AlmightyTech@127.0.0.1:~$</p>
            <div id="output"></div>
            <div id="input-line" class="input-line">
                <div id="prompt" class="prompt-color"></div>
                <div>
                <textarea  type="text" id="cmdline" autocomplete="off"
                          autocapitalize="off" spellcheck="false" autofocus>
            </textarea>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Cli"
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');
#bar {
    text-align: center;
    width: 100vh;
    height: 5vh;
    background-color: #DAD9D9;
    margin: 0 auto;
    font-family: monospace;
    padding: auto;
    float: none;
    border: #0e0f0f 1px solid;
    border-radius: 2% 2% 0% 0%;

}

#screen {
    background-color: #12384d;
    width: 100vh;
    height: 100vh;
    margin: 0 auto;
    padding: 1px;
    border: #0e0f0f 1px solid;
    border-radius: 0% 0% 2% 2%;
    opacity: 98%;
}
.font {
    color: #fff;
    font-family: 'Roboto Mono', monospace;
    font-size: 15px;
    text-align: left;
    position: static;
    margin-top: 1%;
}


#cmdline {
    outline: none;
    background-color: transparent;
    margin: 0;
    width: 100%;
    font: inherit;
    border: none;
    color: white;
}
#output {
    clear: both;
    width: 100%;
}
#prompt {
    white-space: nowrap;
    display: flex;
    -webkit-box-pack: center;
    -webkit-box-orient: vertical;
    display: -moz-box;
    -moz-box-pack: center;
    -moz-box-orient: vertical;
    display: box;
    box-pack: center;
    box-orient: vertical;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}
.prompt-color {
    color: #e09f14;
}
.input-line {
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-align: stretch;
    display: -moz-box;
    -moz-box-orient: horizontal;
    -moz-box-align: stretch;
    display: box;
    box-orient: horizontal;
    box-align: stretch;
    clear: both;
    margin-left: 32%;
    margin-top: -3.5%;
}
.input-line > div:nth-child(2) {
    -webkit-box-flex: 1;
    -moz-box-flex: 1;
    box-flex: 1;
}

.boxsizingBorder {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
//Mac buttons
  .wrapper {
      height: 5vh;
      background: #5e5e5e;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #DAD9D9;
      margin: 0 auto;
      font-family: monospace;
      padding: auto;
      float: none;
      border: #0e0f0f 1px solid;
      border-radius: 2% 2% 0% 0%;
  }

.btn {
    width: 3vh;
    height: 3vh;
    border-radius: 50%;
    margin-right: 1vh;
    position: relative;
    overflow: hidden;
    cursor: pointer;
}


.btn:last-child {
    margin-right: 0;
}


.btn:before, .btn:after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 4px;
    opacity: 0;
    transition: all 300ms ease-in-out;
}

.close-btn {
    background: #FF5D5B;
    border: 4px solid #CF544D;
}

.min-btn {
    background: #FFBB39;
    border: 4px solid #CFA64E;
}

.max-btn {
    background: #00CD4E;
    border: 4px solid #0EA642;
}



/* Close btn */
.close-btn:before, .close-btn:after {
    width: 4px;
    height: 70%;
    background: #460100;
}


.close-btn:before {
    transform: translate(-50%, -50%) rotate(45deg);
}

.close-btn:after {
    transform: translate(-50%, -50%) rotate(-45deg);
}


/* min btn */
.min-btn:before {
    width: 70%;
    height: 5px;
    background: #460100;
}


/* max btn */
.max-btn:before {
    width: 50%;
    height: 50%;
    background: #024D0F;
}

.max-btn:after {
    width: 9px;
    height: 70%;
    transform: translate(-50%, -50%) rotate(-45deg);
    background: #00CD4E;
}


/* Hover function */
.btn:hover:before, .btn:hover:after {
    top: 50%;
    opacity: 1;
}

</style>
