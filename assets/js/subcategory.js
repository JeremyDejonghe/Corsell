//document.addEventListener("DOMContentLoaded", async () => {
    const selected = async function() {
        let subcategories = await fetch("./bin/subcategories.php").then(res => res.json())
        const categorySelected = document.getElementById("category-select").value;
        const newSubcategories = subcategories.filter(subcategory => subcategory.id_category == categorySelected);
        console.log(newSubcategories);
      
        document.getElementById("subcategory-select").innerHTML=null;

        newSubcategories.forEach(subcategory => {
            let option = document.createElement("option")
            option.text = subcategory.name
            option.value = subcategory.id
            document.getElementById("subcategory-select").add(option, null)

            console.log(option)


        });

        // document.getElementById("subcategory-select").add(newSubcategories, null)

    }
    //});