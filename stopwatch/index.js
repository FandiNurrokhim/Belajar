let [milliseconds ,detik ,menit ,jam] = [0,0,0,0];
let timerRef = document.querySelector('.timerDisplay');
let int = null;

document.getElementById('button-start').addEventListener('click', ()=>{
    if(int!==null){
        clearInterval(int);
    }
    int = setInterval(displayTimer,1);
});

document.getElementById('button-stop').addEventListener('click', ()=>{
    clearInterval(int);
});

document.getElementById('button-reset').addEventListener('click', ()=>{
    clearInterval(int);
    [milliseconds, detik, menit, jam] = [0,0,0,0];
    timerRef.innerHTML = '00 : 00 : 00 : 000 ';
});

function displayTimer(){
    milliseconds+=10;
    if(milliseconds == 1000){
        milliseconds = 0;
        detik++;
        if(detik == 60){
            detik = 0;
            menit++;
            if(menit == 60){
                menit = 0;
                jam++;
            }
        }
    }

 let h = jam < 10 ? "0" + jam : jam;
 let m = menit < 10 ? "0" + menit : menit;
 let s = detik < 10 ? "0" + detik : detik;
 let ms = milliseconds < 10 ? "00" + milliseconds : milliseconds < 100 ? "0" + milliseconds : milliseconds;

 timerRef.innerHTML = ` ${h} : ${m} : ${s} : ${ms}`;
}