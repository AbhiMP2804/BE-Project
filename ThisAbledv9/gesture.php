<html>
<head>
  <script type="text/javascript">
    const video = document.querySelector('#video');
    const canvas = document.querySelector('#canvas');
    const context = canvas.getContext('2d');
    const modelURL = "https://teachablemachine.withgoogle.com/models/Model_ID/model.json";

    async function startWebcam() {
      const stream = await navigator.mediaDevices.getUserMedia({
        audio: false,
        video: {
          facingMode: "user"
        }
      });
      video.srcObject = stream;
      await video.play();
      setInterval(async () => {
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
        // Perform gesture recognition on the image data
        ...
      }, 16);
    }
  </script>
</head>
<body onload="startWebcam();">
  <video id="video" width="500" height="500" autoplay></video>
  <canvas id="canvas" width="500" height="500"></canvas>
</body>
</html>
