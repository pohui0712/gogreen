import * as THREE from "three";
import { OrbitControls } from "three/addons/controls/OrbitControls.js";

let earthRadius = 5500;

// shape
const sphere = new THREE.SphereGeometry(earthRadius, 55, 55);
const textureImg = new THREE.TextureLoader().load("./images/earthhd.jpg");
const specImg = new THREE.TextureLoader().load("./images/spec.jpg");
const material = new THREE.MeshBasicMaterial({
  map: textureImg,
  specularMap: specImg,
});
var earthMesh = new THREE.Mesh(sphere, material);

// scene
const scene = new THREE.Scene();
scene.add(new THREE.AmbientLight(0xffffff));
scene.add(earthMesh);

// camera
const camera = new THREE.PerspectiveCamera(
  75,
  window.innerWidth / window.innerHeight,
  0.1,
  15000
);
camera.updateProjectionMatrix();

// renderer
const renderer = new THREE.WebGLRenderer({
  alpha: true,
  canvas: document.querySelector("canvas"),
});
const modelContainer = document.querySelector("#model-container");
renderer.setSize(modelContainer.offsetWidth, modelContainer.offsetHeight);
renderer.setPixelRatio(devicePixelRatio);

// controls
const controls = new OrbitControls(camera, renderer.domElement);
controls.enablePan = false;
controls.enableZoom = false;
camera.position.y = 9000;

// animate
function animate() {
  camera.updateProjectionMatrix();
  requestAnimationFrame(animate);
  earthMesh.rotation.x += 0.0015;
  earthMesh.rotation.y += 0.00035;
  earthMesh.rotation.z += 0.002;

  controls.update();

  renderer.render(scene, camera);
}
animate();
