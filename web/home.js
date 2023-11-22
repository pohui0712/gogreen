import * as THREE from "three";
import { OrbitControls } from "three/addons/controls/OrbitControls.js";

let earthRadius = 4500;

// create shape
const sphere = new THREE.SphereGeometry(earthRadius, 55, 60);
const textureImg = new THREE.TextureLoader().load("./images/earthhd.jpg");
const bumpImg = new THREE.TextureLoader().load("./images/bump.jpg");
const specImg = new THREE.TextureLoader().load("./images/spec.jpg");
const material = new THREE.MeshBasicMaterial({
  map: textureImg,
  bumpMap: bumpImg,
  specularMap: specImg,
});
var earthMesh = new THREE.Mesh(sphere, material);

// create scene
const scene = new THREE.Scene();
scene.add(new THREE.AmbientLight(0xffffff));
scene.background = new THREE.Color(0xf0f0f0);
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

// create controls
const controls = new OrbitControls(camera, renderer.domElement);

// create mouse event
// let isHovered = false;

// function onMouseMove(event) {
//   if (isHovered) {
//     const rotationSpeed = 0.002;
//     earthMesh.rotation.y += event.movementX * rotationSpeed;
//     earthMesh.rotation.x += event.movementY * rotationSpeed;
//   }
// }

// function onMouseEnter(event) {
//   isHovered = true;
// }

// function onMouseLeave(event) {
//   isHovered = false;
// }

// renderer.domElement.addEventListener("mousemove", onMouseMove);
// renderer.domElement.addEventListener("mouseenter", onMouseEnter);
// renderer.domElement.addEventListener("mouseleave", onMouseLeave);

function animate() {
  camera.updateProjectionMatrix();
  requestAnimationFrame(animate);
  earthMesh.rotation.x += 0.0001;
  earthMesh.rotation.y += 0.0005;
  earthMesh.rotation.z += 0.002;

  controls.update();

  renderer.render(scene, camera);
}
animate();
