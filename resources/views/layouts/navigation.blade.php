<?php
$megaMenu = [
    'Engineering BCE Solutions' => [
        'Equipment' => [
            ['name'=>'ASME Code Vessels','slug'=>'asme-code-vessels'],
            ['name'=>'Coal – Fired Boilers','slug'=>'coal-fired-boilers'],
            ['name'=>'Pollution Control Systems','slug'=>'pollution-control-systems'],
            ['name'=>'Dust Collectors','slug'=>'dust-collectors'],
            ['name'=>'Electrostatic Precipitators','slug'=>'electrostatic-precipitators'],
            ['name'=>'Filter Bags','slug'=>'filter-bags'],
            ['name'=>'Industrial Ductwork Design','slug'=>'industrial-ductwork-design'],
            ['name'=>'Industrial Ventilation','slug'=>'industrial-ventilation'],
            ['name'=>'Odor Control Systems','slug'=>'odor-control-systems'],
            ['name'=>'Pleated Filter','slug'=>'pleated-filter'],
            ['name'=>'Thermal Oxidizers','slug'=>'thermal-oxidizers'],
            ['name'=>'Wet Scrubbers','slug'=>'wet-scrubbers'],
        ],
        'Solutions' => [
            ['name'=>'Asphalt','slug'=>'asphalt'],
            ['name'=>'Carbon Black','slug'=>'carbon-black'],
            ['name'=>'Coal','slug'=>'coal'],
            ['name'=>'Compressed Air','slug'=>'compressed-air'],
            ['name'=>'Food Processing','slug'=>'food-processing'],
            ['name'=>'Gasket Compatibility Chart','slug'=>'gasket-compatibility-chart'],
            ['name'=>'Gypsum','slug'=>'gypsum'],
            ['name'=>'Lime','slug'=>'lime'],
            ['name'=>'Particulates','slug'=>'particulates'],
            ['name'=>'Wood Working','slug'=>'wood-working'],
        ],
        'Services' => [
            ['name'=>'System Maintenance and Repair','slug'=>'system-maintenance-repair'],
            ['name'=>'System Installation Services','slug'=>'system-installation'],
            ['name'=>'Equipment Conversions','slug'=>'equipment-conversions'],
            ['name'=>'Environmental Assessment Services','slug'=>'environmental-assessment'],
            ['name'=>'Explosion Protection','slug'=>'explosion-protection'],
            ['name'=>'Explosion Venting','slug'=>'explosion-venting'],
            ['name'=>'Remote Monitoring','slug'=>'remote-monitoring'],
            ['name'=>'Risk Management Services','slug'=>'risk-management'],
            ['name'=>'Structural Analysis','slug'=>'structural-analysis'],
            ['name'=>'System Design','slug'=>'system-design'],
        ],
        'Expertise' => [
            ['name'=>'Chemical Engineering','slug'=>'chemical-engineering'],
            ['name'=>'Civil Engineering','slug'=>'civil-engineering'],
            ['name'=>'Control Systems','slug'=>'control-systems'],
            ['name'=>'Cost Management','slug'=>'cost-management'],
            ['name'=>'Electrical Engineering','slug'=>'electrical-engineering'],
            ['name'=>'Foundation Engineering','slug'=>'foundation-engineering'],
            ['name'=>'Industrial Engineering','slug'=>'industrial-engineering'],
            ['name'=>'Mechanical Engineering','slug'=>'mechanical-engineering'],
            ['name'=>'Process Engineering','slug'=>'process-engineering'],
            ['name'=>'Project Management','slug'=>'project-management'],
            ['name'=>'Structural Engineering','slug'=>'structural-engineering'],
            ['name'=>'Value Engineering','slug'=>'value-engineering'],
        ],
    ],
    // Other categories would be structured similarly
];
?>

<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="flex-shrink-0 text-xl font-bold text-bce-blue">
                    <img src="/images/bcelogo.png" class="h-12 w-auto"/>
                </a>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <?php foreach($megaMenu as $category => $columns): ?>
                        <div class="group relative">
                            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-bce-blue">
                                <?= $category ?>
                                <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <!-- Mega menu -->
                            <div class="absolute left-0 top-full hidden group-hover:block w-screen max-w-7xl px-4 py-6 bg-white shadow-lg">
                                <div class="grid grid-cols-4 gap-8">
                                    <?php foreach($columns as $colTitle => $links): ?>
                                        <div>
                                            <h3 class="text-sm font-semibold text-gray-500 uppercase mb-2"><?= $colTitle ?></h3>
                                            <ul class="space-y-1">
                                                  <?php foreach($links as $link): ?>
                                                        <li>
                                                            <a href="/<?= $link['slug'] ?>" class="text-gray-700 hover:text-bce-blue text-sm">
                                                                <?= $link['name'] ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="hidden sm:flex sm:items-center">
                <a href="#contact" class="bg-bce-blue text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-bce-light-blue transition duration-300">Get a Quote</a>
            </div>
        </div>
    </div>
</nav>
