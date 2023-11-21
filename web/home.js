import * as THREE from "./three.js-master/build/three.module.js";
// import { GLTFLoader } from "three/addons/loaders/GLTFLoader.js";

let earthRadius = 6000;

const sphere = new THREE.SphereGeometry(earthRadius, 60, 60);
const textureImg = new THREE.TextureLoader().load("./images/earthhd.jpg");
// const textureBump = new THREE.TextureLoader().load("./assets/bump.jpg");
// const textureSpec = new THREE.TextureLoader().load("./assets/spec.jpg");
const material = new THREE.MeshBasicMaterial({
  map: textureImg,
  //   bumpMap: textureBump,
  //   specMap: textureSpec,
});
var earthMesh = new THREE.Mesh(sphere, material);

// create scene
const scene = new THREE.Scene();
scene.add(new THREE.AmbientLight(0xbbbbbb));
scene.add(earthMesh);

// create camera
const camera = new THREE.PerspectiveCamera(
  75,
  window.innerWidth / window.innerHeight,
  1,
  20000
);
camera.position.set(1425, 8000, -6160);
camera.lookAt(0, 0, 0);
camera.updateProjectionMatrix();

// create renderer
const renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

//create loader
// const loader = new GTTFLoader();

function animate() {
  camera.updateProjectionMatrix();
  renderer.render(scene, camera);
  requestAnimationFrame(animate);
}

animate();

document.addEventListener(`mousemove`, function () {
  if (earthMesh) {
    earthMesh.rotation.x += 0.02;
    earthMesh.rotation.y += 0.02;
  }
});
