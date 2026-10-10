/**
 * OXID LABS — Spatial 3D Experience & Dual-Theme Digital Systems Core Visualizer
 *
 * Implements a high-efficiency Three.js digital system supporting both DARK and LIGHT modes:
 * - Layer 1 (Background): Volumetric cosmic nebula shader + distant starfield Points
 * - Layer 2 (Atmosphere & Midground): Atmospheric radial core glow + drifting stardust
 * - Layer 3 (Central 3D System Core): Distinctive abstract geometric core:
 *     * Dual-nested polyhedral core (wireframe icosahedron + translucent octahedron nucleus)
 *     * Luminous vertex nodes with calibrated contrast in both themes
 *     * Interlocking architectural gimbal rings with counter-rotational drift
 *     * Radial telemetry connector filaments
 *     * Micro-beacon data pulse traversing inner gimbal orbit
 * - Layer 4 (Outer Orbital Systems):
 *     * 4 architectural orbital paths (equatorial, tilted, core, perimeter)
 *     * 44 telemetry network nodes with contrast-adapted halos
 *     * Interconnected data filaments & active packets
 *     * Grounding polar coordinate depth grid
 * - Centralized Dual-Theme Engine:
 *     * Dark mode: Deep-space cosmic night atmosphere, cyan & violet emissive highlights, additive blending.
 *     * Light mode: Crisp architectural workspace, high-contrast ocean-blue and royal indigo structural lines,
 *       translucent crystalline nucleus, normal blending for sharp node definition without washout.
 * - Smooth live theme transitions without rebuilding scene, destroying renderer, or resetting scroll.
 * - Multi-depth pointer parallax with damped spring inertia and touch auto-oscillation.
 * - Full compliance with `prefers-reduced-motion` and WebGL fallback.
 */
(function () {
    const container = document.getElementById('three-hero-container');
    if (!container || typeof THREE === 'undefined') return;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Detect initial theme from DOM or localStorage
    function getActiveTheme() {
        if (window.OxidTheme && typeof window.OxidTheme.getTheme === 'function') {
            return window.OxidTheme.getTheme();
        }
        return document.documentElement.getAttribute('data-theme') || 'dark';
    }

    let currentThemeName = getActiveTheme();

    // 1. Scene & Camera Setup
    const scene = new THREE.Scene();
    const width = container.clientWidth || window.innerWidth;
    const height = container.clientHeight || window.innerHeight;
    const camera = new THREE.PerspectiveCamera(45, width / height, 0.1, 1000);
    camera.position.set(0, 0, 16.5);

    // 2. High-Efficiency WebGL Renderer
    let renderer;
    try {
        renderer = new THREE.WebGLRenderer({
            alpha: true,
            antialias: true,
            powerPreference: 'high-performance'
        });
    } catch (e) {
        console.warn('WebGL initialization failed, falling back to static presentation:', e);
        return;
    }

    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 1.75));
    container.appendChild(renderer.domElement);

    // =========================================================================
    // TEXTURE GENERATORS: DARK GLOW VS LIGHT CRISP DISC
    // =========================================================================
    function createGlowPointTexture(innerCol, outerCol) {
        const c = document.createElement('canvas');
        c.width = 64;
        c.height = 64;
        const ctx = c.getContext('2d');
        const grad = ctx.createRadialGradient(32, 32, 0, 32, 32, 32);
        grad.addColorStop(0, innerCol);
        grad.addColorStop(0.35, outerCol);
        grad.addColorStop(1, 'rgba(0,0,0,0)');
        ctx.fillStyle = grad;
        ctx.fillRect(0, 0, 64, 64);
        return new THREE.CanvasTexture(c);
    }

    function createLightDiscTexture(coreCol, ringCol, outerCol) {
        const c = document.createElement('canvas');
        c.width = 64;
        c.height = 64;
        const ctx = c.getContext('2d');
        const grad = ctx.createRadialGradient(32, 32, 0, 32, 32, 32);
        grad.addColorStop(0, coreCol);
        grad.addColorStop(0.40, ringCol);
        grad.addColorStop(0.70, outerCol);
        grad.addColorStop(1, 'rgba(255,255,255,0)');
        ctx.fillStyle = grad;
        ctx.fillRect(0, 0, 64, 64);
        return new THREE.CanvasTexture(c);
    }

    const darkNodeTexture = createGlowPointTexture('rgba(255,255,255,1)', 'rgba(56,189,248,0.7)');
    const lightNodeTexture = createLightDiscTexture('rgba(3,105,161,1)', 'rgba(2,132,199,0.85)', 'rgba(14,165,233,0.25)');

    const darkCoreNodeTexture = createGlowPointTexture('rgba(255,255,255,1)', 'rgba(0,229,255,0.85)');
    const lightCoreNodeTexture = createLightDiscTexture('rgba(2,132,199,1)', 'rgba(30,64,175,0.85)', 'rgba(2,132,199,0.25)');

    const darkDustTexture = createGlowPointTexture('rgba(255,255,255,0.95)', 'rgba(56,189,248,0.5)');
    const lightDustTexture = createLightDiscTexture('rgba(30,58,138,0.8)', 'rgba(2,132,199,0.4)', 'rgba(2,132,199,0.05)');

    // =========================================================================
    // LAYER 1: BACKGROUND (NEBULA SHADER + DISTANT STARFIELD)
    // =========================================================================
    const bgGroup = new THREE.Group();
    scene.add(bgGroup);

    // Procedural Nebula Shader supporting theme transition
    const nebulaVertexShader = `
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
        }
    `;

    const nebulaFragmentShader = `
        uniform float uTime;
        uniform float uThemeMix; // 0.0 = dark mode, 1.0 = light mode
        varying vec2 vUv;

        float hash(vec2 p) {
            p = fract(p * vec2(123.34, 456.21));
            p += dot(p, p + 45.32);
            return fract(p.x * p.y);
        }

        float noise(vec2 p) {
            vec2 i = floor(p);
            vec2 f = fract(p);
            f = f * f * (3.0 - 2.0 * f);
            float a = hash(i);
            float b = hash(i + vec2(1.0, 0.0));
            float c = hash(i + vec2(0.0, 1.0));
            float d = hash(i + vec2(1.0, 1.0));
            return mix(mix(a, b, f.x), mix(c, d, f.x), f.y);
        }

        float fbm(vec2 p) {
            float v = 0.0;
            v += 0.500 * noise(p); p *= 2.02;
            v += 0.250 * noise(p); p *= 2.03;
            v += 0.125 * noise(p);
            return v;
        }

        void main() {
            vec2 p = vUv * 2.0 - 1.0;
            float dist = length(p);
            if (dist > 1.0) {
                discard;
            }

            vec2 q = p * 1.6 + vec2(uTime * 0.012, uTime * 0.008);
            float n = fbm(q);

            float alphaDark = smoothstep(1.0, 0.15, dist) * (0.35 + 0.40 * n);
            float alphaLight = smoothstep(1.0, 0.25, dist) * (0.18 + 0.25 * n);
            float alpha = mix(alphaDark, alphaLight, uThemeMix);

            // Dark Mode Palette: Deep space navy, cyan & violet
            vec3 darkNavy   = vec3(0.04, 0.08, 0.16);
            vec3 darkCyan   = vec3(0.02, 0.55, 0.85);
            vec3 darkViolet = vec3(0.38, 0.22, 0.68);
            vec3 colorDark  = mix(darkNavy, darkCyan, smoothstep(0.25, 0.75, n));
            float vBlendDark = smoothstep(0.3, 0.8, sin(p.x * 2.0 + p.y * 1.5 + uTime * 0.04));
            colorDark = mix(colorDark, darkViolet, vBlendDark * 0.65);

            // Light Mode Palette: Soft azure, airy sky cyan, pale lavender
            vec3 lightSky    = vec3(0.88, 0.93, 0.98);
            vec3 lightCyan   = vec3(0.68, 0.85, 0.95);
            vec3 lightViolet = vec3(0.82, 0.83, 0.94);
            vec3 colorLight  = mix(lightSky, lightCyan, smoothstep(0.25, 0.75, n));
            float vBlendLight = smoothstep(0.3, 0.8, sin(p.x * 2.0 + p.y * 1.5 + uTime * 0.04));
            colorLight = mix(colorLight, lightViolet, vBlendLight * 0.55);

            vec3 finalColor = mix(colorDark, colorLight, uThemeMix);
            float finalAlpha = mix(alpha * 0.32, alpha * 0.20, uThemeMix);

            gl_FragColor = vec4(finalColor, finalAlpha);
        }
    `;

    const nebulaMaterial = new THREE.ShaderMaterial({
        vertexShader: nebulaVertexShader,
        fragmentShader: nebulaFragmentShader,
        uniforms: {
            uTime: { value: 0 },
            uThemeMix: { value: currentThemeName === 'light' ? 1.0 : 0.0 }
        },
        transparent: true,
        depthWrite: false,
        blending: THREE.NormalBlending
    });

    const nebulaGeometry = new THREE.PlaneGeometry(32, 22);
    const nebulaMesh = new THREE.Mesh(nebulaGeometry, nebulaMaterial);
    nebulaMesh.position.set(0, -0.8, -10.0);
    bgGroup.add(nebulaMesh);

    // Distant Starfield
    const bgStarCount = 420;
    const bgStarPositions = new Float32Array(bgStarCount * 3);
    const bgStarColors = new Float32Array(bgStarCount * 3);

    const cWhite = new THREE.Color(0xF8FAFC);
    const cPaleCyan = new THREE.Color(0xBAE6FD);
    const cLavender = new THREE.Color(0xDDD6FE);

    for (let i = 0; i < bgStarCount; i++) {
        bgStarPositions[i * 3]     = (Math.random() - 0.5) * 60;
        bgStarPositions[i * 3 + 1] = (Math.random() - 0.5) * 40;
        bgStarPositions[i * 3 + 2] = -15 - Math.random() * 20;

        const pick = Math.random();
        const col = pick > 0.65 ? cPaleCyan : (pick > 0.45 ? cLavender : cWhite);
        bgStarColors[i * 3]     = col.r;
        bgStarColors[i * 3 + 1] = col.g;
        bgStarColors[i * 3 + 2] = col.b;
    }

    const bgStarGeo = new THREE.BufferGeometry();
    bgStarGeo.setAttribute('position', new THREE.BufferAttribute(bgStarPositions, 3));
    bgStarGeo.setAttribute('color', new THREE.BufferAttribute(bgStarColors, 3));

    const bgStarMat = new THREE.PointsMaterial({
        size: 0.16,
        vertexColors: true,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.35 : 0.75,
        depthWrite: false,
        map: createGlowPointTexture('rgba(255,255,255,1)', 'rgba(186,230,253,0.6)'),
        blending: currentThemeName === 'light' ? THREE.NormalBlending : THREE.AdditiveBlending
    });

    const bgStars = new THREE.Points(bgStarGeo, bgStarMat);
    bgGroup.add(bgStars);

    // =========================================================================
    // LAYER 2: ATMOSPHERIC CORE GLOW & MIDGROUND STARDUST
    // =========================================================================
    const midGroup = new THREE.Group();
    scene.add(midGroup);

    // Core Glow Texture (Dynamic Canvas)
    function createCoreGlowTexture(isLight) {
        const c = document.createElement('canvas');
        c.width = 128;
        c.height = 128;
        const ctx = c.getContext('2d');
        const g = ctx.createRadialGradient(64, 64, 0, 64, 64, 64);
        if (isLight) {
            g.addColorStop(0, 'rgba(2, 132, 199, 0.20)');
            g.addColorStop(0.45, 'rgba(99, 102, 241, 0.10)');
            g.addColorStop(0.75, 'rgba(148, 163, 184, 0.04)');
            g.addColorStop(1, 'rgba(255, 255, 255, 0)');
        } else {
            g.addColorStop(0, 'rgba(56, 189, 248, 0.40)');
            g.addColorStop(0.45, 'rgba(99, 102, 241, 0.18)');
            g.addColorStop(0.75, 'rgba(139, 92, 246, 0.06)');
            g.addColorStop(1, 'rgba(0, 0, 0, 0)');
        }
        ctx.fillStyle = g;
        ctx.fillRect(0, 0, 128, 128);
        return new THREE.CanvasTexture(c);
    }

    const darkCoreGlowTexture = createCoreGlowTexture(false);
    const lightCoreGlowTexture = createCoreGlowTexture(true);

    const coreGlowMaterial = new THREE.MeshBasicMaterial({
        map: currentThemeName === 'light' ? lightCoreGlowTexture : darkCoreGlowTexture,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.32 : 0.65,
        depthWrite: false,
        blending: currentThemeName === 'light' ? THREE.NormalBlending : THREE.AdditiveBlending
    });
    const coreGlowMesh = new THREE.Mesh(new THREE.PlaneGeometry(16, 16), coreGlowMaterial);
    coreGlowMesh.position.set(0, -1.0, -4.5);
    midGroup.add(coreGlowMesh);

    // Drifting Stardust
    const dustCount = 85;
    const dustPositions = new Float32Array(dustCount * 3);
    const dustColors = new Float32Array(dustCount * 3);
    const cCyanGlow = new THREE.Color(0x38BDF8);
    const cVioletGlow = new THREE.Color(0xA78BFA);

    for (let i = 0; i < dustCount; i++) {
        dustPositions[i * 3]     = (Math.random() - 0.5) * 32;
        dustPositions[i * 3 + 1] = (Math.random() - 0.5) * 20 - 0.8;
        dustPositions[i * 3 + 2] = (Math.random() - 0.5) * 12 - 2;

        const col = i % 2 === 0 ? cCyanGlow : cVioletGlow;
        dustColors[i * 3]     = col.r;
        dustColors[i * 3 + 1] = col.g;
        dustColors[i * 3 + 2] = col.b;
    }

    const dustGeo = new THREE.BufferGeometry();
    dustGeo.setAttribute('position', new THREE.BufferAttribute(dustPositions, 3));
    dustGeo.setAttribute('color', new THREE.BufferAttribute(dustColors, 3));

    const dustMat = new THREE.PointsMaterial({
        size: 0.32,
        vertexColors: true,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.45 : 0.60,
        map: currentThemeName === 'light' ? lightDustTexture : darkDustTexture,
        blending: currentThemeName === 'light' ? THREE.NormalBlending : THREE.AdditiveBlending,
        depthWrite: false
    });
    const stardust = new THREE.Points(dustGeo, dustMat);
    midGroup.add(stardust);

    // =========================================================================
    // LAYER 3: FOREGROUND SYSTEMS (SYSTEMS CORE + ORBITALS + DATA TELEMETRY)
    // =========================================================================
    const systemsGroup = new THREE.Group();
    systemsGroup.position.set(0, -1.0, 0);
    systemsGroup.rotation.x = 0.50;
    scene.add(systemsGroup);

    function createOrbitPath(radiusX, radiusY, segments = 128) {
        const points = [];
        for (let i = 0; i <= segments; i++) {
            const theta = (i / segments) * Math.PI * 2;
            points.push(new THREE.Vector3(Math.cos(theta) * radiusX, Math.sin(theta) * radiusY, 0));
        }
        return new THREE.BufferGeometry().setFromPoints(points);
    }

    // A. DISTINCTIVE DIGITAL SYSTEM CORE
    const coreGroup = new THREE.Group();
    systemsGroup.add(coreGroup);

    // 1. Outer Polyhedral Geometric Shell (Wireframe Icosahedron)
    const icosahedronGeo = new THREE.IcosahedronGeometry(1.65, 0);
    const icosaWireframeGeo = new THREE.WireframeGeometry(icosahedronGeo);
    const coreWireMat = new THREE.LineBasicMaterial({
        color: currentThemeName === 'light' ? 0x0284C7 : 0x38BDF8,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.88 : 0.55,
        linewidth: 1
    });
    const coreWireMesh = new THREE.LineSegments(icosaWireframeGeo, coreWireMat);
    coreGroup.add(coreWireMesh);

    // 2. Vertex Nodes of the Geometric Core
    const icosaPosAttr = icosahedronGeo.attributes.position;
    const coreNodePositions = [];
    const coreNodeColors = [];
    const cCoreCyan = new THREE.Color(0x00E5FF);
    const cCoreWhite = new THREE.Color(0xFFFFFF);

    for (let i = 0; i < icosaPosAttr.count; i++) {
        coreNodePositions.push(icosaPosAttr.getX(i), icosaPosAttr.getY(i), icosaPosAttr.getZ(i));
        const col = i % 3 === 0 ? cCoreWhite : cCoreCyan;
        coreNodeColors.push(col.r, col.g, col.b);
    }

    const coreNodesGeo = new THREE.BufferGeometry();
    coreNodesGeo.setAttribute('position', new THREE.Float32BufferAttribute(coreNodePositions, 3));
    coreNodesGeo.setAttribute('color', new THREE.Float32BufferAttribute(coreNodeColors, 3));

    const coreNodesMat = new THREE.PointsMaterial({
        size: 0.35,
        vertexColors: true,
        map: currentThemeName === 'light' ? lightCoreNodeTexture : darkCoreNodeTexture,
        transparent: true,
        blending: currentThemeName === 'light' ? THREE.NormalBlending : THREE.AdditiveBlending,
        depthWrite: false
    });
    const coreNodesMesh = new THREE.Points(coreNodesGeo, coreNodesMat);
    coreGroup.add(coreNodesMesh);

    // 3. Inner Crystalline Nucleus (Nested Octahedron)
    const octahedronGeo = new THREE.OctahedronGeometry(0.85, 0);
    const octaTranslucentMat = new THREE.MeshBasicMaterial({
        color: currentThemeName === 'light' ? 0x6366F1 : 0x8B5CF6,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.32 : 0.28,
        wireframe: false,
        depthWrite: false,
        blending: currentThemeName === 'light' ? THREE.NormalBlending : THREE.AdditiveBlending
    });
    const octaNucleus = new THREE.Mesh(octahedronGeo, octaTranslucentMat);
    coreGroup.add(octaNucleus);

    const octaWireframeGeo = new THREE.WireframeGeometry(octahedronGeo);
    const octaWireMat = new THREE.LineBasicMaterial({
        color: currentThemeName === 'light' ? 0x4338CA : 0xC084FC,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.90 : 0.65,
        linewidth: 1
    });
    const octaWireMesh = new THREE.LineSegments(octaWireframeGeo, octaWireMat);
    coreGroup.add(octaWireMesh);

    // 4. Interlocking Gimbal Rings
    const gimbalA = new THREE.Line(createOrbitPath(2.35, 2.35, 96), new THREE.LineBasicMaterial({
        color: currentThemeName === 'light' ? 0x0284C7 : 0x00E5FF,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.72 : 0.40,
        linewidth: 1
    }));
    gimbalA.rotation.x = Math.PI * 0.25;
    gimbalA.rotation.y = Math.PI * 0.15;
    coreGroup.add(gimbalA);

    const gimbalB = new THREE.Line(createOrbitPath(2.70, 2.70, 96), new THREE.LineBasicMaterial({
        color: currentThemeName === 'light' ? 0x6D28D9 : 0xA78BFA,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.68 : 0.35,
        linewidth: 1
    }));
    gimbalB.rotation.x = -Math.PI * 0.28;
    gimbalB.rotation.z = Math.PI * 0.20;
    coreGroup.add(gimbalB);

    // Gimbal Micro-Beacon
    const beaconGeo = new THREE.BufferGeometry().setAttribute('position', new THREE.Float32BufferAttribute([0, 0, 0], 3));
    const beaconMat = new THREE.PointsMaterial({
        size: 0.48,
        color: currentThemeName === 'light' ? 0x0284C7 : 0x00E5FF,
        map: currentThemeName === 'light' ? lightCoreNodeTexture : darkCoreNodeTexture,
        transparent: true,
        blending: currentThemeName === 'light' ? THREE.NormalBlending : THREE.AdditiveBlending,
        depthWrite: false
    });
    const coreBeacon = new THREE.Points(beaconGeo, beaconMat);
    coreGroup.add(coreBeacon);

    // B. OUTER ORBITAL STRUCTURES
    const cyanPathMat = new THREE.LineBasicMaterial({
        color: currentThemeName === 'light' ? 0x0284C7 : 0x38BDF8,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.68 : 0.34,
        linewidth: 1
    });

    const violetPathMat = new THREE.LineBasicMaterial({
        color: currentThemeName === 'light' ? 0x4F46E5 : 0x818CF8,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.62 : 0.28,
        linewidth: 1
    });

    const subtlePathMat = new THREE.LineBasicMaterial({
        color: currentThemeName === 'light' ? 0x64748B : 0x475569,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.48 : 0.22,
        linewidth: 1
    });

    const perimeterPathMat = new THREE.LineBasicMaterial({
        color: currentThemeName === 'light' ? 0x94A3B8 : 0x475569,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.42 : 0.22,
        linewidth: 1
    });

    // Ring 1: Primary Equatorial Orbit (Radius 7.2)
    const ring1 = new THREE.Line(createOrbitPath(7.2, 7.2), cyanPathMat);
    systemsGroup.add(ring1);

    // Ring 2: Tilted Secondary Orbit (Radius 6.0)
    const ring2 = new THREE.Line(createOrbitPath(6.0, 6.0), violetPathMat);
    ring2.rotation.x = Math.PI * 0.28;
    ring2.rotation.y = Math.PI * 0.15;
    systemsGroup.add(ring2);

    // Ring 3: Core Inner Transition Orbit (Radius 4.4)
    const ring3 = new THREE.Line(createOrbitPath(4.4, 4.4), subtlePathMat);
    ring3.rotation.x = -Math.PI * 0.22;
    ring3.rotation.y = Math.PI * 0.35;
    systemsGroup.add(ring3);

    // Ring 4: Outer Perimeter Guideline (Radius 9.0)
    const ring4 = new THREE.Line(createOrbitPath(9.0, 8.0), perimeterPathMat);
    ring4.rotation.x = Math.PI * 0.12;
    systemsGroup.add(ring4);

    // Radial Telemetry Filaments
    const radialFilamentPositions = [];
    for (let i = 0; i < 8; i++) {
        const theta = (i / 8) * Math.PI * 2;
        const innerX = Math.cos(theta) * 1.65;
        const innerY = Math.sin(theta) * 1.65;
        const outerX = Math.cos(theta) * 4.4;
        const outerY = Math.sin(theta) * 4.4;
        radialFilamentPositions.push(innerX, innerY, 0, outerX, outerY, 0);
    }
    const radialFilamentGeo = new THREE.BufferGeometry().setAttribute(
        'position', new THREE.Float32BufferAttribute(radialFilamentPositions, 3)
    );
    const radialFilamentMat = new THREE.LineBasicMaterial({
        color: currentThemeName === 'light' ? 0x0284C7 : 0x0284C7,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.42 : 0.16,
        linewidth: 1
    });
    const radialFilaments = new THREE.LineSegments(radialFilamentGeo, radialFilamentMat);
    systemsGroup.add(radialFilaments);

    // 44 Telemetry Network Nodes
    const nodeCount = 44;
    const nodePositions = [];
    const nodeColors = [];
    const colorCyan = new THREE.Color(currentThemeName === 'light' ? 0x0284C7 : 0x38BDF8);
    const colorViolet = new THREE.Color(currentThemeName === 'light' ? 0x6D28D9 : 0xA78BFA);
    const colorWhite = new THREE.Color(currentThemeName === 'light' ? 0x1E40AF : 0xFFFFFF);

    for (let i = 0; i < nodeCount; i++) {
        const theta = (i / nodeCount) * Math.PI * 2;
        const radius = i % 3 === 0 ? 7.2 : (i % 3 === 1 ? 6.0 : 4.4);
        let x = Math.cos(theta) * radius;
        let y = Math.sin(theta) * radius;
        let z = Math.sin(theta * 2.0) * 0.65;

        if (i % 3 === 1) {
            const rotX = Math.PI * 0.28;
            const newY = y * Math.cos(rotX) - z * Math.sin(rotX);
            const newZ = y * Math.sin(rotX) + z * Math.cos(rotX);
            y = newY;
            z = newZ;
        }

        nodePositions.push(x, y, z);
        const col = i % 4 === 0 ? colorWhite : (i % 2 === 0 ? colorCyan : colorViolet);
        nodeColors.push(col.r, col.g, col.b);
    }

    const nodeGeometry = new THREE.BufferGeometry();
    nodeGeometry.setAttribute('position', new THREE.Float32BufferAttribute(nodePositions, 3));
    nodeGeometry.setAttribute('color', new THREE.Float32BufferAttribute(nodeColors, 3));

    const nodeMaterial = new THREE.PointsMaterial({
        size: 0.28,
        vertexColors: true,
        map: currentThemeName === 'light' ? lightNodeTexture : darkNodeTexture,
        transparent: true,
        blending: currentThemeName === 'light' ? THREE.NormalBlending : THREE.AdditiveBlending,
        depthWrite: false
    });

    const nodesMesh = new THREE.Points(nodeGeometry, nodeMaterial);
    systemsGroup.add(nodesMesh);

    // Telemetry Connecting Filaments
    const linkPositions = [];
    for (let i = 0; i < nodeCount; i++) {
        const next = (i + 1) % nodeCount;
        const cross = (i + 7) % nodeCount;

        linkPositions.push(
            nodePositions[i * 3], nodePositions[i * 3 + 1], nodePositions[i * 3 + 2],
            nodePositions[next * 3], nodePositions[next * 3 + 1], nodePositions[next * 3 + 2]
        );

        if (i % 3 === 0) {
            linkPositions.push(
                nodePositions[i * 3], nodePositions[i * 3 + 1], nodePositions[i * 3 + 2],
                nodePositions[cross * 3], nodePositions[cross * 3 + 1], nodePositions[cross * 3 + 2]
            );
        }
    }

    const linkGeometry = new THREE.BufferGeometry();
    linkGeometry.setAttribute('position', new THREE.Float32BufferAttribute(linkPositions, 3));
    const linkMaterial = new THREE.LineBasicMaterial({
        color: currentThemeName === 'light' ? 0x0284C7 : 0x0284C7,
        transparent: true,
        opacity: currentThemeName === 'light' ? 0.45 : 0.20,
        linewidth: 1
    });
    const linkLines = new THREE.LineSegments(linkGeometry, linkMaterial);
    systemsGroup.add(linkLines);

    // Active Data Signal Packets
    const packetMat1 = new THREE.PointsMaterial({
        size: 0.44,
        color: currentThemeName === 'light' ? 0x0284C7 : 0x00E5FF,
        map: currentThemeName === 'light' ? lightNodeTexture : darkNodeTexture,
        transparent: true,
        blending: currentThemeName === 'light' ? THREE.NormalBlending : THREE.AdditiveBlending,
        depthWrite: false
    });
    const packetMat2 = new THREE.PointsMaterial({
        size: 0.42,
        color: currentThemeName === 'light' ? 0x6D28D9 : 0xC084FC,
        map: currentThemeName === 'light' ? lightNodeTexture : darkNodeTexture,
        transparent: true,
        blending: currentThemeName === 'light' ? THREE.NormalBlending : THREE.AdditiveBlending,
        depthWrite: false
    });

    const packet1Geo = new THREE.BufferGeometry().setAttribute('position', new THREE.Float32BufferAttribute([0, 0, 0], 3));
    const packet2Geo = new THREE.BufferGeometry().setAttribute('position', new THREE.Float32BufferAttribute([0, 0, 0], 3));
    const packet3Geo = new THREE.BufferGeometry().setAttribute('position', new THREE.Float32BufferAttribute([0, 0, 0], 3));

    const packet1 = new THREE.Points(packet1Geo, packetMat1);
    const packet2 = new THREE.Points(packet2Geo, packetMat2);
    const packet3 = new THREE.Points(packet3Geo, packetMat1);

    systemsGroup.add(packet1);
    systemsGroup.add(packet2);
    systemsGroup.add(packet3);

    // Polar Grid Helper
    let gridHelper = new THREE.PolarGridHelper(
        9.2, 4, 8, 32,
        currentThemeName === 'light' ? 0x94A3B8 : 0x1E293B,
        currentThemeName === 'light' ? 0xCBD5E1 : 0x0F172A
    );
    gridHelper.position.y = -0.5;
    gridHelper.material.transparent = true;
    gridHelper.material.opacity = currentThemeName === 'light' ? 0.35 : 0.14;
    systemsGroup.add(gridHelper);

    // =========================================================================
    // THEME TRANSITION CONTROLLER (LIVE MATERIAL INTERPOLATION)
    // =========================================================================
    let targetThemeMix = currentThemeName === 'light' ? 1.0 : 0.0;
    let currentThemeMix = targetThemeMix;

    function applyThreeTheme(themeName) {
        currentThemeName = themeName;
        const isLight = themeName === 'light';
        targetThemeMix = isLight ? 1.0 : 0.0;

        // Background Starfield
        bgStarMat.opacity = isLight ? 0.35 : 0.75;
        bgStarMat.blending = isLight ? THREE.NormalBlending : THREE.AdditiveBlending;
        bgStarMat.needsUpdate = true;

        // Core Atmosphere Glow
        coreGlowMaterial.map = isLight ? lightCoreGlowTexture : darkCoreGlowTexture;
        coreGlowMaterial.opacity = isLight ? 0.30 : 0.65;
        coreGlowMaterial.blending = isLight ? THREE.NormalBlending : THREE.AdditiveBlending;
        coreGlowMaterial.needsUpdate = true;

        // Stardust Particles
        dustMat.opacity = isLight ? 0.45 : 0.60;
        dustMat.map = isLight ? lightDustTexture : darkDustTexture;
        dustMat.blending = isLight ? THREE.NormalBlending : THREE.AdditiveBlending;
        dustMat.needsUpdate = true;

        // Digital Core Wireframe (High contrast in light mode)
        coreWireMat.color.setHex(isLight ? 0x0284C7 : 0x38BDF8);
        coreWireMat.opacity = isLight ? 0.88 : 0.55;

        // Core Nodes
        coreNodesMat.map = isLight ? lightCoreNodeTexture : darkCoreNodeTexture;
        coreNodesMat.blending = isLight ? THREE.NormalBlending : THREE.AdditiveBlending;
        coreNodesMat.needsUpdate = true;

        // Inner Octahedron Nucleus
        octaTranslucentMat.color.setHex(isLight ? 0x6366F1 : 0x8B5CF6);
        octaTranslucentMat.opacity = isLight ? 0.32 : 0.28;
        octaTranslucentMat.blending = isLight ? THREE.NormalBlending : THREE.AdditiveBlending;

        octaWireMat.color.setHex(isLight ? 0x4338CA : 0xC084FC);
        octaWireMat.opacity = isLight ? 0.90 : 0.65;

        // Gimbal Rings & Beacon
        gimbalA.material.color.setHex(isLight ? 0x0284C7 : 0x00E5FF);
        gimbalA.material.opacity = isLight ? 0.72 : 0.40;

        gimbalB.material.color.setHex(isLight ? 0x6D28D9 : 0xA78BFA);
        gimbalB.material.opacity = isLight ? 0.68 : 0.35;

        beaconMat.color.setHex(isLight ? 0x0284C7 : 0x00E5FF);
        beaconMat.map = isLight ? lightCoreNodeTexture : darkCoreNodeTexture;
        beaconMat.blending = isLight ? THREE.NormalBlending : THREE.AdditiveBlending;
        beaconMat.needsUpdate = true;

        // Outer Orbital Tracks
        cyanPathMat.color.setHex(isLight ? 0x0284C7 : 0x38BDF8);
        cyanPathMat.opacity = isLight ? 0.68 : 0.34;

        violetPathMat.color.setHex(isLight ? 0x4F46E5 : 0x818CF8);
        violetPathMat.opacity = isLight ? 0.62 : 0.28;

        subtlePathMat.color.setHex(isLight ? 0x64748B : 0x475569);
        subtlePathMat.opacity = isLight ? 0.48 : 0.22;

        perimeterPathMat.color.setHex(isLight ? 0x94A3B8 : 0x475569);
        perimeterPathMat.opacity = isLight ? 0.42 : 0.22;

        radialFilamentMat.opacity = isLight ? 0.42 : 0.16;

        // Telemetry Nodes (Update vertex colors & texture)
        const colorsAttr = nodeGeometry.attributes.color;
        const c1 = new THREE.Color(isLight ? 0x0284C7 : 0x38BDF8);
        const c2 = new THREE.Color(isLight ? 0x6D28D9 : 0xA78BFA);
        const c3 = new THREE.Color(isLight ? 0x1E40AF : 0xFFFFFF);

        for (let i = 0; i < nodeCount; i++) {
            const col = i % 4 === 0 ? c3 : (i % 2 === 0 ? c1 : c2);
            colorsAttr.setXYZ(i, col.r, col.g, col.b);
        }
        colorsAttr.needsUpdate = true;

        nodeMaterial.map = isLight ? lightNodeTexture : darkNodeTexture;
        nodeMaterial.blending = isLight ? THREE.NormalBlending : THREE.AdditiveBlending;
        nodeMaterial.needsUpdate = true;

        // Connecting Lines
        linkMaterial.color.setHex(isLight ? 0x0284C7 : 0x0284C7);
        linkMaterial.opacity = isLight ? 0.45 : 0.20;

        // Signal Packets
        packetMat1.color.setHex(isLight ? 0x0284C7 : 0x00E5FF);
        packetMat1.map = isLight ? lightNodeTexture : darkNodeTexture;
        packetMat1.blending = isLight ? THREE.NormalBlending : THREE.AdditiveBlending;
        packetMat1.needsUpdate = true;

        packetMat2.color.setHex(isLight ? 0x6D28D9 : 0xC084FC);
        packetMat2.map = isLight ? lightNodeTexture : darkNodeTexture;
        packetMat2.blending = isLight ? THREE.NormalBlending : THREE.AdditiveBlending;
        packetMat2.needsUpdate = true;

        // Polar Depth Grid
        gridHelper.material.color.setHex(isLight ? 0x94A3B8 : 0x1E293B);
        gridHelper.material.opacity = isLight ? 0.35 : 0.14;
    }

    // Listen for global theme change events
    window.addEventListener('oxid-theme-changed', (e) => {
        if (e.detail && e.detail.theme) {
            applyThreeTheme(e.detail.theme);
        }
    });

    // Expose method on window for direct access if needed
    window.setOxidThreeTheme = applyThreeTheme;

    // =========================================================================
    // POINTER PARALLAX & SPRING INTERPOLATION
    // =========================================================================
    let mouseX = 0, mouseY = 0;
    let targetRotX = 0, targetRotY = 0;
    let currentRotX = 0, currentRotY = 0;
    let scrollY = 0;
    let isTouch = false;

    window.addEventListener('touchstart', () => { isTouch = true; }, { passive: true, once: true });

    window.addEventListener('mousemove', (e) => {
        if (isTouch) return;
        mouseX = (e.clientX / window.innerWidth) * 2 - 1;
        mouseY = -(e.clientY / window.innerHeight) * 2 + 1;
        targetRotX = Math.max(-0.12, Math.min(0.12, mouseY * 0.09));
        targetRotY = Math.max(-0.16, Math.min(0.16, mouseX * 0.14));
    }, { passive: true });

    document.addEventListener('mouseleave', () => {
        targetRotX = 0;
        targetRotY = 0;
    });

    window.addEventListener('scroll', () => {
        scrollY = window.pageYOffset || document.documentElement.scrollTop;
    }, { passive: true });

    function onResize() {
        if (!container) return;
        const w = container.clientWidth || window.innerWidth;
        const h = container.clientHeight || window.innerHeight;
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
        renderer.setSize(w, h);
    }
    window.addEventListener('resize', onResize);

    // Page Visibility API
    let isPageVisible = !document.hidden;
    document.addEventListener('visibilitychange', () => {
        isPageVisible = !document.hidden;
        if (isPageVisible && !prefersReducedMotion) {
            clock.start();
            requestAnimationFrame(render);
        }
    });

    // =========================================================================
    // MULTI-LAYER ANIMATION LOOP
    // =========================================================================
    const clock = new THREE.Clock();

    function render() {
        if (!isPageVisible) return;

        if (prefersReducedMotion) {
            renderer.render(scene, camera);
            return;
        }

        requestAnimationFrame(render);
        const elapsed = clock.getElapsedTime();

        // Smoothly interpolate theme mix uniform in nebula shader (0.0 <-> 1.0)
        currentThemeMix += (targetThemeMix - currentThemeMix) * 0.08;
        nebulaMaterial.uniforms.uThemeMix.value = currentThemeMix;
        nebulaMaterial.uniforms.uTime.value = elapsed;

        // If touch device: gentle organic floating depth
        if (isTouch) {
            targetRotX = Math.sin(elapsed * 0.45) * 0.05;
            targetRotY = Math.cos(elapsed * 0.35) * 0.07;
        }

        // Smooth spring lerp for pointer parallax
        currentRotX += (targetRotX - currentRotX) * 0.048;
        currentRotY += (targetRotY - currentRotY) * 0.048;

        // Layer 1 Parallax (Background: 0.18x)
        bgGroup.rotation.x = currentRotX * 0.18;
        bgGroup.rotation.y = currentRotY * 0.18;

        // Layer 2 Parallax (Atmosphere: 0.45x) + breathing glow
        midGroup.rotation.x = currentRotX * 0.45;
        midGroup.rotation.y = currentRotY * 0.45;
        stardust.rotation.y = elapsed * 0.006;

        // Layer 3: Central 3D System Core (Independent Harmonic Rotations)
        coreGroup.rotation.y = elapsed * 0.08 + currentRotY * 0.6;
        coreGroup.rotation.x = Math.sin(elapsed * 0.06) * 0.15 + currentRotX * 0.6;
        
        // Counter-rotating inner nucleus
        octaNucleus.rotation.x = -elapsed * 0.14;
        octaNucleus.rotation.z = elapsed * 0.18;
        octaWireMesh.rotation.x = -elapsed * 0.14;
        octaWireMesh.rotation.z = elapsed * 0.18;

        // Gimbal Rings Harmonic Precession
        gimbalA.rotation.z = elapsed * 0.025;
        gimbalB.rotation.z = -elapsed * 0.035;

        // Micro-beacon along Gimbal Ring A (Radius 2.35)
        const bTheta = (elapsed * 0.75) % (Math.PI * 2);
        const bPos = beaconGeo.attributes.position.array;
        bPos[0] = Math.cos(bTheta) * 2.35;
        bPos[1] = Math.sin(bTheta) * 2.35 * Math.cos(Math.PI * 0.25);
        bPos[2] = Math.sin(bTheta) * 2.35 * Math.sin(Math.PI * 0.25);
        beaconGeo.attributes.position.needsUpdate = true;

        // Pulse core vertex nodes
        coreNodesMat.size = 0.35 + Math.sin(elapsed * 2.2) * 0.06;

        // Layer 4: Foreground Systems (Isometric tilt + 1.0x parallax)
        systemsGroup.rotation.x = 0.50 + currentRotX * 1.0;
        systemsGroup.rotation.y = currentRotY * 1.0;

        // Independent orbital rotational drift
        systemsGroup.rotation.z = elapsed * 0.016;
        ring1.rotation.z = elapsed * 0.007;
        ring2.rotation.z = -elapsed * 0.012;
        ring3.rotation.z = elapsed * 0.020;
        ring4.rotation.z = -elapsed * 0.005;

        // Gentle node pulse
        nodeMaterial.size = 0.28 + Math.sin(elapsed * 1.6) * 0.03;

        // Dynamic Data Packet Paths
        const th1 = (elapsed * 0.40) % (Math.PI * 2);
        const p1Pos = packet1Geo.attributes.position.array;
        p1Pos[0] = Math.cos(th1) * 7.2;
        p1Pos[1] = Math.sin(th1) * 7.2;
        p1Pos[2] = 0;
        packet1Geo.attributes.position.needsUpdate = true;

        const th2 = (-elapsed * 0.35) % (Math.PI * 2);
        const p2X = Math.cos(th2) * 6.0;
        const p2Y = Math.sin(th2) * 6.0;
        const p2Pos = packet2Geo.attributes.position.array;
        p2Pos[0] = p2X;
        p2Pos[1] = p2Y * Math.cos(Math.PI * 0.28);
        p2Pos[2] = p2Y * Math.sin(Math.PI * 0.28);
        packet2Geo.attributes.position.needsUpdate = true;

        const th3 = (elapsed * 0.52) % (Math.PI * 2);
        const p3X = Math.cos(th3) * 4.4;
        const p3Y = Math.sin(th3) * 4.4;
        const p3Pos = packet3Geo.attributes.position.array;
        p3Pos[0] = p3X;
        p3Pos[1] = p3Y * Math.cos(-Math.PI * 0.22);
        p3Pos[2] = p3Y * Math.sin(-Math.PI * 0.22);
        packet3Geo.attributes.position.needsUpdate = true;

        // SCROLL-LINKED SPATIAL TRANSFORMATION (HERO EXIT)
        if (scrollY > 0) {
            const heroHeight = window.innerHeight || 850;
            const scrollProgress = Math.min(scrollY / heroHeight, 2.5);

            systemsGroup.position.z = -scrollProgress * 4.8;
            systemsGroup.position.y = -1.0 - (scrollY * 0.0022);
            systemsGroup.rotation.x = 0.50 + currentRotX * 1.0 + (scrollProgress * 0.20);
            coreGroup.rotation.y = elapsed * 0.08 + currentRotY * 0.6 + (scrollProgress * 0.5);

            midGroup.position.y = -(scrollY * 0.0012);
            midGroup.position.z = -scrollProgress * 2.0;

            const baseGlow = currentThemeName === 'light' ? 0.30 : 0.65;
            coreGlowMaterial.opacity = Math.max(0.12, baseGlow - scrollProgress * 0.30);
            nodeMaterial.opacity = Math.max(0.25, 1.0 - scrollProgress * 0.45);
        } else {
            systemsGroup.position.z = 0;
            systemsGroup.position.y = -1.0;
            midGroup.position.y = 0;
            midGroup.position.z = 0;
            coreGlowMaterial.opacity = (currentThemeName === 'light' ? 0.28 : 0.55) + Math.sin(elapsed * 0.8) * 0.08;
            nodeMaterial.opacity = 1.0;
        }

        renderer.render(scene, camera);
    }

    render();
})();
