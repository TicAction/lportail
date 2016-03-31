<?php

use Illuminate\Database\Seeder;

class SchoolboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("schoolboards")->insert(
            [   'name' => 'Commission Scolaire des Affluents',
                'region' => 'Lanaudière','adress' =>
                '80, rue Jean-Baptiste-Meilleur',
                'city' => 'Repentigny (Qc) J6A 6C5',
                'phone' => '(450) 492-9400',
                'email' => 'cs@cs.cs',
                'url' => 'http://cs.cs',
            ]);

        DB::table("schoolboards")->insert(
            [    'name' => 'Commission Scolaire des Appalaches',
                'region' => 'Chaudière-Appalaches',
                'adress' => '650, rue Lapierre',
                'city' => 'Thetford Mines (Qc) G6G 7P1',
                'phone' => '(418) 338-7800',
                'email' => 'cs@cs.cs',
                'url' => 'http://cs.cs',
            ]);
        DB::table("schoolboards")->insert(
            array('id' => '3','name' => 'Commission Scolaire de la Baie-James','region' => 'Nord-du-Québec','adress' => '596, 4e Rue','city' => 'Chibougamau (Qc) G8P 1S3','phone' => '(418) 748-7621','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '4','name' => 'Commission Scolaire de la Beauce-Etchemin','region' => 'Chaudière-Appalaches','adress' => '1925, 118e Rue','city' => 'Saint-Georges (Qc) G5Y 7R7','phone' => '(418) 228-5541','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '5','name' => 'Commission Scolaire des Bois-Francs','region' => 'Centre-du-Québec','adress' => '40, boulevard Bois-Francs Nord','city' => 'Victoriaville (Qc) G6P 6S5','phone' => '(819) 758-6453','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '6','name' => 'Commission Scolaire de la Capitale','region' => 'Capitale-Nationale','adress' => '1900, rue Côté','city' => 'Québec (Qc) G1N 3Y5','phone' => '(418) 686-4040','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '7','name' => 'Central Québec School Board','region' => 'Capitale-Nationale','adress' => '2046, chemin Saint-Louis','city' => 'Québec (Qc) G1T 1P4','phone' => '(418) 688-8730','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '8','name' => 'Commission Scolaire de Charlevoix','region' => 'Capitale-Nationale','adress' => '575, boul. de Comporté','city' => 'La Malbaie (Qc) G5A 1T5','phone' => '(418) 665-3765','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '9','name' => 'Commission Scolaire du Chemin-du-Roy','region' => 'Mauricie','adress' => '1515, rue Sainte-Marguerite','city' => 'Trois-Rivières (Qc) G9A 5E7','phone' => '(819) 379-5989','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '10','name' => 'Commission Scolaire des Chênes','region' => 'Centre-du-Québec','adress' => '457, rue des Écoles','city' => 'Drummondville (Qc) J2B 1J3','phone' => '(819) 478-6700','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '11','name' => 'Commission Scolaire des Chic-Chocs','region' => 'Gaspésie–Îles-de-la-Madeleine','adress' => '102, rue Jacques-Cartier','city' => 'Gaspé (Qc) G4X 2S9','phone' => '(418) 368-3499','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );

        DB::table("schoolboards")->insert(
            array('id' => '12','name' => 'Commission Scolaire au Cœur-des-Vallées','region' => 'Outaouais','adress' => '582, rue Maclaren Est','city' => 'Gatineau (Qc) J8L 2W2','phone' => '(819) 986-8511','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '13','name' => 'Commission Scolaire de la Côte-du-Sud','region' => 'Chaudière-Appalaches','adress' => '157, rue Saint-Louis','city' => 'Montmagny (Qc) G5V 4N3','phone' => '(418) 248-2016','email' => 'cs@cs.cs','url' => 'http://cs.cs')

        );
        DB::table("schoolboards")->insert(
            array('id' => '14','name' => 'Commission Scolaire Crie','region' => 'Nord-du-Québec','adress' => '203, rue Main','city' => 'Mistissini (Qc) G0W 1C0','phone' => '(418) 923-2764','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '15','name' => 'Commission Scolaire des Découvreurs','region' => 'Capitale-Nationale','adress' => '100-945, avenue Wolfe','city' => 'Québec (Qc) G1V 4E2','phone' => '(418) 652-2121','email' => 'cs@cs.cs','url' => 'http://cs.cs')

        );
        DB::table("schoolboards")->insert(
            array('id' => '16','name' => 'Commission Scolaire des Draveurs','region' => 'Outaouais','adress' => '200, boulevard Maloney Est','city' => 'Gatineau (Qc) J8P 1K3','phone' => '(819) 663-9221','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '17','name' => 'Eastern Shores School Board','region' => 'Gaspésie–Îles-de-la-Madeleine','adress' => '40, rue Mountsorrel','city' => 'New Carlisle (Qc) G0C 1Z0','phone' => '(418) 752-2247','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '18','name' => 'Eastern Townships School Board','region' => 'Estrie','adress' => '340 rue Saint-Jean-Bosco','city' => 'Magog (Qc) J1X 1K9','phone' => '(819) 868-3100','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '19','name' => 'Commission Scolaire de l\'Énergie','region' => 'Mauricie','adress' => '2072, rue Gignac, case postale 580','city' => 'Shawinigan, (Qc) G9N 6V7','phone' => '(819) 539-6971','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '20','name' => 'English-Montréal School Board','region' => 'Montréal','adress' => '6000, avenue Fielding','city' => 'Montréal (Qc) H3X 1T4','phone' => '(514) 483-7200','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '21','name' => 'Commission Scolaire de l\'Estuaire','region' => 'Côte-Nord','adress' => '771, boulevard Jolliet','city' => 'Baie-Comeau (Qc) G5C 1P3','phone' => '(418) 589-0806','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '22','name' => 'Commission Scolaire du Fer','region' => 'Côte-Nord','adress' => '30, rue Comeau','city' => 'Sept-Îles (Qc) G4R 4N2','phone' => '(418) 968-9901','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '23','name' => 'Commission Scolaire du Fleuve-et-des-Lacs','region' => 'Bas-Saint-Laurent','adress' => '14, rue du Vieux-Chemin','city' => 'Témiscouata-sur-le-Lac (Qc) G0L 1E0','phone' => '(418) 854-2370','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '24','name' => 'Commission Scolaire des Grandes-Seigneuries','region' => 'Montérégie','adress' => '50, boulevard Taschereau','city' => 'La Prairie (Qc) J5R 4V3','phone' => '(514) 380-8899','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '25','name' => 'Commission Scolaire Harricana','region' => 'Abitibi-Témiscamingue','adress' => '341, rue Principale Nord','city' => 'Amos (Qc) J9T 2L8','phone' => '(819) 732-6561','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '26','name' => 'Commission Scolaire des Hautes-Rivières','region' => 'Montérégie','adress' => '210, rue Notre-Dame','city' => 'Saint-Jean-sur-Richelieu (Qc) J3B 6N3','phone' => '(450) 359-6411','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '27','name' => 'Commission Scolaire des Hauts-Bois-de-l\'Outaouais','region' => 'Outaouais','adress' => '331, rue du Couvent','city' => 'Maniwaki (Qc) J9E 1H5','phone' => '(819) 449-7866','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '28','name' => 'Commission Scolaire des Hauts-Cantons','region' => 'Estrie','adress' => '308, rue Palmer','city' => 'East Angus (Qc) J0B 1R0','phone' => '(819) 832-4953','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '29','name' => 'Commission Scolaire des Îles','region' => 'Gaspésie–Îles-de-la-Madeleine','adress' => '1419, chemin de l\'Étang-du-Nord','city' => 'Les Îles-de-la-Madeleine (Qc) G4T 3B9','phone' => '(418) 986-5511','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '30','name' => 'Commission Scolaire de la Jonquière','region' => 'Saguenay–Lac-St-Jean','adress' => '3644, rue Saint-Jules','city' => 'Jonquière, Saguenay (Qc) G7X 7X4','phone' => '(418) 542-7551','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '31','name' => 'Commission Scolaire de Kamouraska-Rivière-du-Loup','region' => 'Bas-Saint-Laurent','adress' => '464, rue Lafontaine','city' => 'Rivière-du-Loup (Qc) G5R 3Z5','phone' => '(418) 862-8201','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '32','name' => 'Commission Scolaire Kativik','region' => 'Montréal','adress' => '9800, boul. Cavendish, suite 400','city' => 'Montréal (Qc) H4M 2V9','phone' => '(514) 482-8220','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '33','name' => 'Commission Scolaire du Lac-Abitibi','region' => 'Abitibi-Témiscamingue','adress' => '500, rue Principale','city' => 'La Sarre (Qc) J9Z 2A2','phone' => '(819) 333-5411','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '34','name' => 'Commission Scolaire du Lac-Saint-Jean','region' => 'Saguenay–Lac-St-Jean','adress' => '350, boulevard Champlain Sud','city' => 'Alma (Qc) G8B 3N8','phone' => '(418) 669-6000','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '35','name' => 'Commission Scolaire du Lac-Témiscamingue','region' => 'Abitibi-Témiscamingue','adress' => '2, rue Maisonneuve','city' => 'Ville-Marie (Qc) J9V 1V4','phone' => '(819) 629-2472','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '36','name' => 'Commission Scolaire des Laurentides','region' => 'Laurentides','adress' => '13, rue Saint-Antoine','city' => 'Sainte-Agathe-des-Monts (Qc) J8C 2C3','phone' => '(819) 326-0333','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '37','name' => 'Commission Scolaire de Laval','region' => 'Laval','adress' => '955, boul. Saint-Martin Ouest','city' => 'Laval (Qc) H7S 1M5','phone' => '(450) 662-7000','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '38','name' => 'Lester-B.-Pearson School Board','region' => 'Montréal','adress' => '1925, avenue Brookdale','city' => 'Dorval (Qc) H9P 2Y7','phone' => '(514) 422-3000','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '39','name' => 'Commission Scolaire du Littoral','region' => 'Côte-Nord','adress' => '789, rue Beaulieu','city' => 'Sept-Îles (Qc) G4R 1P8','phone' => '(418) 962-5558','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '40','name' => 'Commission Scolaire Marguerite-Bourgeoys','region' => 'Montréal','adress' => '1100, boul. de la Côte-Vertu','city' => 'Montréal (Qc) H4L 4V1','phone' => '(514) 855-4500','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '41','name' => 'Commission Scolaire Marie-Victorin','region' => 'Montérégie','adress' => '13, rue Saint-Laurent Est','city' => 'Longueuil (Qc) J4H 4B7','phone' => '(450) 670-0730','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '42','name' => 'Commission Scolaire des Monts-et-Marées','region' => 'Bas-Saint-Laurent','adress' => '93, avenue du Parc','city' => 'Amqui (Qc) G5J 2L8','phone' => '(418) 629-6200','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '43','name' => 'Commission Scolaire de Montréal','region' => 'Montréal','adress' => '3737, rue Sherbrooke Est','city' => 'Montréal (Qc) H1X 3B3','phone' => '(514) 596-6000','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '44','name' => 'Commission Scolaire de la Moyenne-Côte-Nord','region' => 'Côte-Nord','adress' => '1235, rue de la Digue','city' => 'Havre-Saint-Pierre (Qc) G0G 1P0','phone' => '(418) 538-3044','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '45','name' => 'Commission Scolaire des Navigateurs','region' => 'Chaudière-Appalaches','adress' => '1860, 1re Rue','city' => 'Lévis (Qc) G6W 5M6','phone' => '(418) 839-0500','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '46','name' => 'Commission Scolaire New Frontiers','region' => 'Montérégie','adress' => '214, rue McLeod','city' => 'Châteauguay (Qc) J6J 2H4','phone' => '(450) 691-1440','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '47','name' => 'Commission Scolaire de l\'Or-et-des-Bois','region' => 'Abitibi-Témiscamingue','adress' => '799, boulevard Forest','city' => 'Val-d\'Or (Qc) J9P 2L4','phone' => '(819) 825-4220','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '48','name' => 'Commission Scolaire des Patriotes','region' => 'Montérégie','adress' => '1740, rue Roberval','city' => 'Saint-Bruno-de-Montarville (Qc) J3V 3R3','phone' => '(450) 441-2919','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '49','name' => 'Commission Scolaire du Pays-des-Bleuets','region' => 'Saguenay–Lac-St-Jean','adress' => '828, boulevard Saint-Joseph','city' => 'Roberval (Qc) G8H 2L5','phone' => '(418) 275-2332','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '51','name' => 'Commission Scolaire Pierre-Neveu','region' => 'Laurentides','adress' => '525, rue de la Madone','city' => 'Mont-Laurier (Qc) J9L 1S4','phone' => '(819) 623-4310','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '52','name' => 'Commission Scolaire de la Pointe-de-l\'Île','region' => 'Montréal','adress' => '550, 53e Avenue','city' => 'Montréal (Qc) H1A 2T7','phone' => '(514) 642-9520','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '53','name' => 'Commission Scolaire des Portages-de-l\'Outaouais','region' => 'Outaouais','adress' => '225, rue Saint-Rédempteur','city' => 'Gatineau (Qc) J8X 2T3','phone' => '(819) 771-4548','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '54','name' => 'Commission Scolaire de Portneuf','region' => 'Capitale-Nationale','adress' => '310, rue de l\'Église','city' => 'Donnacona (Qc) G3M 1Z8','phone' => '(418) 285-2600','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '55','name' => 'Commission Scolaire des Premières-Seigneuries','region' => 'Capitale-Nationale','adress' => '643, avenue du Cénacle','city' => 'Québec (Qc) G1E 1B3','phone' => '(418) 666-4666','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '56','name' => 'Commission Scolaire de la Région-de-Sherbrooke','region' => 'Estrie','adress' => '2955, boul. de l\'Université','city' => 'Sherbrooke (Qc) J1K 2Y3','phone' => '(819) 822-5540','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '57','name' => 'Commission Scolaire René-Lévesque','region' => 'Gaspésie–Îles-de-la-Madeleine','adress' => '145, avenue Louisbourg','city' => 'Bonaventure (Qc) G0C 1E0','phone' => '(418) 534-3003','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '58','name' => 'Commission Scolaire de la Riveraine','region' => 'Centre-du-Québec','adress' => '375, rue de Monseigneur-Brunault','city' => 'Nicolet (Qc) J3T 1Y6','phone' => '(819) 293-5821','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '59','name' => 'Commission Scolaire des Rives-du-Saguenay','region' => 'Saguenay–Lac-St-Jean','adress' => '36, rue Jacques-Cartier Est','city' => 'Saguenay (Qc) G7H 1W2','phone' => '(418) 698-5000','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '60','name' => 'Riverside School Board','region' => 'Montérégie','adress' => '7525, chemin de Chambly','city' => 'Longueuil (Qc) J3Y 0N7','phone' => '(450) 672-4010','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '61','name' => 'Commission Scolaire de la Rivière-du-Nord','region' => 'Laurentides','adress' => '995, rue Labelle','city' => 'Saint-Jérôme (Qc) J7Z 5N7','phone' => '(450) 438-3131','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '62','name' => 'Commission Scolaire de Rouyn-Noranda','region' => 'Abitibi-Témiscamingue','adress' => '70, rue des Oblats Est C.P. 908','city' => 'Rouyn-Noranda (Qc) J9X 5C9','phone' => '(819) 762-8161','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '63','name' => 'Commission Scolaire de Saint-Hyacinthe','region' => 'Montérégie','adress' => '2255, avenue Sainte-Anne','city' => 'Saint-Hyacinthe (Qc) J2S 5H7','phone' => '(450) 773-8401','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '64','name' => 'Commission Scolaire des Samares','region' => 'Lanaudière','adress' => '4671, rue Principale','city' => 'Saint-Félix-de-Valois (Qc) J0K 2M0','phone' => '(450) 758-3500','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '65','name' => 'Commission Scolaire de la Seigneurie-des-Mille-Îles','region' => 'Laurentides','adress' => '430, boulevard Arthur-Sauvé','city' => 'Saint-Eustache (Qc) J7R 6V6','phone' => '(450) 974-7000','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '66','name' => 'Sir-Wilfrid-Laurier School Board','region' => 'Laurentides','adress' => '235 Montée Lesage','city' => 'Rosemère (Qc) J7A 4Y6','phone' => '(450) 621-5600','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '67','name' => 'Commission Scolaire des Sommets','region' => 'Estrie','adress' => '449, rue Percy','city' => 'Magog (Qc) J1X 1B5','phone' => '(819) 847-1610','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '68','name' => 'Commission Scolaire de Sorel-Tracy','region' => 'Montérégie','adress' => '41, avenue de l\'Hôtel-Dieu','city' => 'Sorel-Tracy (Qc) J3P 1L1','phone' => '(450) 746-3990','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '69','name' => 'Commission Scolaire des Trois-Lacs','region' => 'Montérégie','adress' => '400, avenue Saint-Charles','city' => 'Vaudreuil-Dorion (Qc) J7V 6B1','phone' => '(514) 477-7000','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '70','name' => 'Commission Scolaire du Val-des-Cerfs','region' => 'Montérégie','adress' => '55, rue Court C.P. 9000','city' => 'Granby (Qc) J2G 9H7','phone' => '(450) 372-0221','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '71','name' => 'Commission Scolaire de la Vallée-des-Tisserands','region' => 'Montérégie','adress' => '630, rue Ellice','city' => 'Beauharnois (Qc) J6N 3S1','phone' => '(450) 225-2788','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );
        DB::table("schoolboards")->insert(
            array('id' => '72','name' => 'Western Québec School Board','region' => 'Outaouais','adress' => '15, rue Katimavik','city' => 'Gatineau (Qc) J9J 0E9','phone' => '(819) 684-2336','email' => 'cs@cs.cs','url' => 'http://cs.cs')
        );

    }
}
