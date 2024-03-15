<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Food Guide</title>
    <style>
* {
    margin: 0;
    padding: 5px;
    box-sizing: border-box;
}

body {
    font-family: 'Comic Sans MS', sans-serif;
}

        .main {
    width: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 20%, rgba(0, 0, 0, 0.5) 20%), url('baby1.gif');
    background-position: center;
    background-size: cover;
    height: 210vh;
}

.navbar {
    width: 100%;
    max-width: 1200px;
    height: 150px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
}

.menu {
    width: 50%;
    display: flex;
    justify-content: center;
}

ul {
    display: flex;
    align-items: center;
}

ul li {
    list-style: none;
    font-size: 18px;
    margin: 20px;
}

ul li a {
    text-decoration: none;
    color: #ffff;
    font-family: 'Comic Sans MS';
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover {
    color: #DDB306;
}

        .user-face {
            width: 40px; /* Adjust the size as needed */
            height: 40px; /* Adjust the size as needed */
            border-radius: 50%; /* Creates a circle shape */
            overflow: hidden; /* Ensures the image stays within the circle */
            margin-right: 10px; /* Adjust the spacing as needed */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }

.content{
 width: 990px;
    height: 1500px;
    background-color:skyblue;
    position: absolute;
    top: 260px;
    left: 370px;
    transform: translate(0%,-5%);
    border-radius: 100px;
    padding: 25px;
}
    </style>
</head>
<body>
<div class="main">
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">Baby Care System</h2>
        </div>

    <?php include_once('header.php') ?>
    </div> 

    <div class="content">
        <center><h1>Welcome To<br><span>Nutrition</span> Section !</h1></center>
        <table>
        <tr>
            <th>Age</th>
            <th>Recommended Foods</th>
        </tr>
        <tr>
            <td>1 Year</td>
            <td>Soft fruits (e.g., banana, avocado), cooked vegetables, plain yogurt, finely chopped meats</td>
            <td>Breast Milk or Formula: Breast milk or iron-fortified formula should still be the primary source of nutrition for babies up to one year of age. Breastfeeding is recommended up to at least 12 months, and beyond if both the mother and baby are willing. Formula-fed babies should continue to be given formula until they are at least one year old. </td>
            <td>Texture and Consistency: As the baby gets older, gradually introduce more textures and consistencies. By one year old, most babies can handle soft, mashed, or finely chopped foods. Avoid giving foods that pose a choking hazard, such as whole grapes, nuts, popcorn, and chunks of raw vegetables.</td>
        </tr>
        <tr>
            <td>2 Years</td>
            <td>Whole grains (e.g., oatmeal, whole wheat bread), dairy products, small portions of lean protein, fruits</td>
            <td>For a two-year-old child, it's essential to provide a balanced diet that supports their growth and development. Aim to include a variety of foods from all food groups to ensure they receive adequate nutrients. Offer a mix of fruits, vegetables, whole grains, lean proteins, and dairy products.</td>
            <td>Fruits and vegetables provide essential vitamins, minerals, and fiber necessary for overall health. Whole grains like oats, rice, and whole wheat bread offer energy and additional fiber. </td>
        </tr>
        <tr>
            <td>3 Years</td>
            <td>Varied fruits and vegetables, lean protein sources, dairy or dairy alternatives, whole grains</td>
            <td>For a 3-year-old child, it's crucial to provide a balanced diet that supports their growth and development. At this age, children need a variety of nutrients to fuel their active lifestyles and promote healthy brain and body development.</td>
            <td>A well-rounded diet should include a mix of fruits, vegetables, whole grains, protein sources such as lean meats, fish, eggs, and legumes, as well as dairy or dairy alternatives for calcium. It's important to offer a rainbow of colorful fruits and vegetables to ensure they receive a range of vitamins and minerals. Whole grains like whole wheat bread, brown rice, and oats provide fiber for digestive health and sustained energy. Lean proteins are essential for muscle growth and repair.</td>
        </tr>
        <tr>
            <td>4 Years</td>
            <td>Colorful vegetables, fruits, nuts, seeds, lean protein, whole grains</td>
            <td> For a 4-year-old child, a balanced diet rich in nutrients is essential for their growth and development. At this age, meals should include a variety of foods from all food groups to ensure they receive adequate nutrients. Focus on providing plenty of fruits and vegetables, whole grains, lean proteins such as poultry, fish, beans, and tofu, as well as healthy fats like those found in avocados, nuts, and seeds</td>
            <td>Dairy or dairy alternatives are important sources of calcium for bone health. It's also crucial to limit sugary snacks and beverages and opt for water or milk instead. Encourage regular mealtimes and snacks to maintain energy levels throughout the day.  </td>
        </tr>
        <tr>
            <td>5 Years</td>
            <td>Continued variety of fruits, vegetables, whole grains, dairy or alternatives, protein-rich foods</td>
            <td>For a 5-year-old child, a balanced and nutritious diet is essential to support their growth and development. At this age, children require a variety of nutrients to fuel their active lifestyles and support cognitive function. </td>
            <td>A diet rich in fruits, vegetables, whole grains, lean proteins, and dairy products is ideal. Fruits and vegetables provide essential vitamins, minerals, and fiber necessary for proper growth and immune function. Whole grains such as oats, brown rice, and whole wheat bread offer complex carbohydrates for sustained energy. Lean proteins like poultry, fish, beans, and tofu provide essential amino acids for muscle development and repair.  </td>
        </tr>
    </table>
    </div>
</div>

</body>
</html>
