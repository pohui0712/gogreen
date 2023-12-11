import * as THREE from 'three'

// Sence, camera, renderer
const scence = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(
    75,                             //field of view(value in degrees)
    innerWidth / innerHeight,       //aspect ratio of sence
    0.1,                            //near clipping plane
    1000                            //far clipping plane
)
const renderer = new THREE.WebGLRenderer();

renderer.setSize(innerWidth)
document.body.appendChild(renderer.domElement)

