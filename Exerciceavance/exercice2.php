<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Boutique de Potions de Pré-au-Lard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: white;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .card-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .card-title {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .card-value {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .card-subtitle {
            font-size: 0.8rem;
            color: #888;
        }

        .positive { color: #28a745; }
        .negative { color: #dc3545; }
        .warning { color: #ffc107; }

        .potions-table {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-top: 30px;
        }

        .table-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 1.3rem;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: #555;
            font-size: 0.9rem;
        }

        td {
            font-size: 0.9rem;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .profit-positive {
            background: #d4edda;
            color: #155724;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
        }

        .profit-negative {
            background: #f8d7da;
            color: #721c24;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
        }

        .potion-name {
            font-weight: 600;
            color: #764ba2;
        }

        @media (max-width: 768px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .card-value {
                font-size: 1.5rem;
            }
            
            table {
                font-size: 0.8rem;
            }
            
            th, td {
                padding: 10px 8px;
            }
        }
    </style>
</head>
<body>
    <?php
    // Données des commandes
    $commandes = [
        ['id' => 1,'client' => 'Harry', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
        ['id' => 2,'client' => 'Hermione','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
        ['id' => 3,'client' => 'Ron', 'potion' => 'Courage','prix' => 29.99, 'etat' => 'préparation'],
        ['id' => 4,'client' => 'Drago', 'potion' => 'Puissance','prix' => 59.00, 'etat' => 'payé'],
        ['id' => 5,'client' => 'Luna','potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
        ['id' => 6,'client' => 'Neville', 'potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
        ['id' => 7,'client' => 'Ginny', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'préparation'],
        ['id' => 8,'client' => 'Sirius','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
        ['id' => 9,'client' => 'Remus', 'potion' => 'Loup-Garou', 'prix' => 70.00, 'etat' => 'impayé'],
        ['id' => 10, 'client' => 'Tonks', 'potion' => 'Caméléon', 'prix' => 56.20, 'etat' => 'préparation'],
        ['id' => 11, 'client' => 'Fred','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
        ['id' => 12, 'client' => 'George','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
        ['id' => 13, 'client' => 'Dumbledore','potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'payé'],
        ['id' => 14, 'client' => 'Hagrid','potion' => 'Puissance','prix' => 59.00, 'etat' => 'préparation'],
        ['id' => 15, 'client' => 'McGonagall','potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
        ['id' => 16, 'client' => 'Cho', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'impayé'],
        ['id' => 17, 'client' => 'Seamus','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
        ['id' => 18, 'client' => 'Dean','potion' => 'Courage','prix' => 29.99, 'etat' => 'payé'],
        ['id' => 19, 'client' => 'Firenze', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
        ['id' => 20, 'client' => 'Krum','potion' => 'Courage','prix' => 29.99, 'etat' => 'impayé'],
        ['id' => 21, 'client' => 'Fleur', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'payé'],
        ['id' => 22, 'client' => 'Bill','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
        ['id' => 23, 'client' => 'Molly', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'préparation'],
        ['id' => 24, 'client' => 'Arthur','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
        ['id' => 25, 'client' => 'Percy', 'potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
        ['id' => 26, 'client' => 'Lavande', 'potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
        ['id' => 27, 'client' => 'Trelawney', 'potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'préparation'],
        ['id' => 28, 'client' => 'Kingsley','potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
        ['id' => 29, 'client' => 'Barty', 'potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'impayé'],
        ['id' => 30, 'client' => 'Dolores', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
    ];

    $coutsProduction = [
        'Invisibilité'   => 15.00,
        'Explosion'      => 10.00,
        'Mémoire'        => 14.00,
        'Courage'        => 12.00,
        'Puissance'      => 18.00,
        'Rêves'          => 13.00,
        'Charme'         => 11.00,
        'Métamorphose'   => 20.00,
        'Loup-Garou'     => 22.00,
        'Caméléon'       => 16.00,
        'Sérénité'       => 25.00,
        'Concentration'  => 17.00,
    ];

    
    $totalCommandes = count($commandes);
    $commandesPayees = array_filter($commandes, function($c) { return $c['etat'] === 'payé'; });
    $commandesImpayes = array_filter($commandes, function($c) { return $c['etat'] === 'impayé'; });
    $commandesPreparation = array_filter($commandes, function($c) { return $c['etat'] === 'préparation'; });
    
    $nbPayees = count($commandesPayees);
    $nbImpayes = count($commandesImpayes);
    $nbPreparation = count($commandesPreparation);
    
    
    $clients = array_unique(array_column($commandes, 'client'));
    $nbClientsUniques = count($clients);
    
    
    $caTotal = array_sum(array_column($commandesPayees, 'prix'));
    $caImpaye = array_sum(array_column($commandesImpayes, 'prix'));
    $caPreparation = array_sum(array_column($commandesPreparation, 'prix'));
    
    $pourcentageImpaye = $caTotal > 0 ? ($caImpaye / ($caTotal + $caImpaye + $caPreparation)) * 100 : 0;
    $pourcentagePreparation = $caTotal > 0 ? ($caPreparation / ($caTotal + $caImpaye + $caPreparation)) * 100 : 0;
    
    $coutTotalProduction = 0;
    foreach ($commandesPayees as $commande) {
        $coutTotalProduction += $coutsProduction[$commande['potion']];
    }
    
    $beneficeTotal = $caTotal - $coutTotalProduction;
    
    $potionsStats = [];
    foreach ($commandes as $commande) {
        $potion = $commande['potion'];
        if (!isset($potionsStats[$potion])) {
            $potionsStats[$potion] = [
                'quantite' => 0,
                'prix_unitaire' => $commande['prix'],
                'ca_total' => 0,
                'ca_paye' => 0,
                'cout_total' => 0,
                'benefice' => 0
            ];
        }
        
        $potionsStats[$potion]['quantite']++;
        $potionsStats[$potion]['ca_total'] += $commande['prix'];
        $potionsStats[$potion]['cout_total'] += $coutsProduction[$potion];
        
        if ($commande['etat'] === 'payé') {
            $potionsStats[$potion]['ca_paye'] += $commande['prix'];
        }
    }
    
    foreach ($potionsStats as $potion => &$stats) {
        $commandesPayeesPotion = array_filter($commandes, function($c) use ($potion) {
            return $c['potion'] === $potion && $c['etat'] === 'payé';
        });
        
        $coutPayePotion = count($commandesPayeesPotion) * $coutsProduction[$potion];
        $stats['benefice'] = $stats['ca_paye'] - $coutPayePotion;
    }
    ?>

    <div class="container">
        <h1>🧪 Boutique de Potions de Pré-au-Lard</h1>
        
        <div class="dashboard-grid">
            <div class="card">
                <div class="card-icon">✅</div>
                <div class="card-title">Total des commandes</div>
                <div class="card-value"><?= $totalCommandes ?></div>
                <div class="card-subtitle">Toutes commandes confondues</div>
            </div>
            
            <div class="card">
                <div class="card-icon">💸</div>
                <div class="card-title">Commandes impayées</div>
                <div class="card-value negative"><?= $nbImpayes ?></div>
                <div class="card-subtitle"><?= number_format($pourcentageImpaye, 1) ?>% du total</div>
            </div>
            
            <div class="card">
                <div class="card-icon">🧪</div>
                <div class="card-title">En préparation</div>
                <div class="card-value warning"><?= $nbPreparation ?></div>
                <div class="card-subtitle"><?= number_format($pourcentagePreparation, 1) ?>% du total</div>
            </div>
            
            <div class="card">
                <div class="card-icon">👥</div>
                <div class="card-title">Clients différents</div>
                <div class="card-value"><?= $nbClientsUniques ?></div>
                <div class="card-subtitle">Clientèle unique</div>
            </div>
            
            <div class="card">
                <div class="card-icon">💰</div>
                <div class="card-title">CA Total (payé)</div>
                <div class="card-value positive"><?= number_format($caTotal, 2) ?> €</div>
                <div class="card-subtitle">Revenus encaissés</div>
            </div>
            
            <div class="card">
                <div class="card-icon">📉</div>
                <div class="card-title">CA Impayé</div>
                <div class="card-value negative"><?= number_format($caImpaye, 2) ?> €</div>
                <div class="card-subtitle"><?= number_format($pourcentageImpaye, 1) ?>% du CA total</div>
            </div>
            
            <div class="card">
                <div class="card-icon">⏳</div>
                <div class="card-title">CA En préparation</div>
                <div class="card-value warning"><?= number_format($caPreparation, 2) ?> €</div>
                <div class="card-subtitle"><?= number_format($pourcentagePreparation, 1) ?>% du CA total</div>
            </div>
            
            <div class="card">
                <div class="card-icon">🪙</div>
                <div class="card-title">Bénéfice Total</div>
                <div class="card-value <?= $beneficeTotal >= 0 ? 'positive' : 'negative' ?>"><?= number_format($beneficeTotal, 2) ?> €</div>
                <div class="card-subtitle">CA - Coûts de production</div>
            </div>
        </div>
        
        <div class="potions-table">
            <div class="table-header">
                📊 Statistiques détaillées par potion
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Potion</th>
                        <th>Quantité vendue</th>
                        <th>Prix unitaire</th>
                        <th>CA généré</th>
                        <th>CA payé</th>
                        <th>Coût total</th>
                        <th>Bénéfice</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($potionsStats as $potion => $stats): ?>
                    <tr>
                        <td class="potion-name"><?= $potion ?></td>
                        <td><?= $stats['quantite'] ?></td>
                        <td><?= number_format($stats['prix_unitaire'], 2) ?> €</td>
                        <td><?= number_format($stats['ca_total'], 2) ?> €</td>
                        <td><?= number_format($stats['ca_paye'], 2) ?> €</td>
                        <td><?= number_format($stats['cout_total'], 2) ?> €</td>
                        <td>
                            <span class="<?= $stats['benefice'] >= 0 ? 'profit-positive' : 'profit-negative' ?>">
                                <?= number_format($stats['benefice'], 2) ?> €
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>