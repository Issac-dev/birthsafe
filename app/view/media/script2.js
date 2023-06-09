// $(function() {

//     // contact form animations
//     $('#contact').click(function() {
//       $('#contactForm').fadeToggle();
//     })
//     $(document).mouseup(function(e) {
//       var container = $("#contactForm");

//       if (!container.is(e.target) // if the target of the click isn't the container...
//         &&
//         container.has(e.target).length === 0) // ... nor a descendant of the container
//       {
//         container.fadeOut();
//       }
//     });

//   });
//   $(function() {

//     // contact form animations
//     $('#contact2').click(function() {
//       $('#contactForm2').fadeToggle();
//     })
//     $(document).mouseup(function(e) {
//       var container = $("#contactForm2");

//       if (!container.is(e.target) // if the target of the click isn't the container...
//         &&
//         container.has(e.target).length === 0) // ... nor a descendant of the container
//       {
//         container.fadeOut();
//       }
//     });

//   });


//   'use strict'

// let log = console.log.bind(console),
//   id = val => document.getElementById(val),
//   ul = id('ul'),
//   gUMbtn = id('gUMbtn'),
//   start = id('start'),
//   stop = id('stop'),
//   stream,
//   recorder,
//   counter=1,
//   chunks,
//   media;


// gUMbtn.onclick = e => {
//   let mv = id('mediaVideo'),
//       mediaOptions = {
//         video: {
//           tag: 'video',
//           type: 'video/webm',
//           ext: '.mp4',
//           gUM: {video: true, audio: true}
//         },
//         audio: {
//           tag: 'audio',
//           type: 'audio/ogg',
//           ext: '.ogg',
//           gUM: {audio: true}
//         }
//       };
//   media = mv.checked ? mediaOptions.video : mediaOptions.audio;
//   navigator.mediaDevices.getUserMedia(media.gUM).then(_stream => {
//     stream = _stream;
//     id('gUMArea').style.display = 'none';
//     id('btns').style.display = 'inherit';
//     start.removeAttribute('disabled');
//     recorder = new MediaRecorder(stream);
//     recorder.ondataavailable = e => {
//       chunks.push(e.data);
//       if(recorder.state == 'inactive')  makeLink();
//     };
//     log('got media successfully');
//   }).catch(log);
// }

// start.onclick = e => {
//   start.disabled = true;
//   stop.removeAttribute('disabled');
//   chunks=[];
//   recorder.start();
// }


// stop.onclick = e => {
//   stop.disabled = true;
//   recorder.stop();
//   start.removeAttribute('disabled');
// }



// function makeLink(){
//   let audio = 'audio';
//   let acceptType = '';

//   let blob = new Blob(chunks, {type: media.type })
//     , url = URL.createObjectURL(blob)
//     , li = document.createElement('li')
//     , mt = document.createElement(media.tag)
//     , hf = document.createElement('a')
//     , ip = document.createElement('input')
//   ;
//   mt.controls = true;
//   mt.src = url;
//   hf.href = url;
//   ip.name
//   hf.download = `${counter++}${media.ext}`;
//   hf.innerHTML = `donwload ${hf.download}`;
//   li.appendChild(mt);
//   li.appendChild(hf);
//   ul.appendChild(li);
// }