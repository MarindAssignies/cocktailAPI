/**
 * Input Selection
 */

var ingredients = ["Light rum","Applejack","Gin","Dark rum","Sweet Vermouth","Strawberry schnapps","Scotch","Apricot brandy","Triple sec","Southern Comfort","Orange bitters","Brandy","Lemon vodka","Blended whiskey","Dry Vermouth","Amaretto","Tea","Champagne","Coffee liqueur","Bourbon","Tequila","Vodka","Añejo rum","Bitters","Sugar","Kahlua","demerara Sugar","Dubonnet Rouge","Lime juice","Irish whiskey","Apple brandy","Carbonated water","Cherry brandy","Creme de Cacao","Grenadine","Port","Coffee brandy","Red wine","Rum","Grapefruit juice","Ricard","Sherry","Cognac","Sloe gin","Apple juice","Pineapple juice","Lemon juice","Sugar syrup","Milk","Strawberries","Chocolate syrup","Yoghurt","Mango","Ginger","Lime","Cantaloupe","Berries","Grapes","Kiwi","Tomato juice","Cocoa powder","Chocolate","Heavy cream","Galliano","Peach Vodka","Ouzo","Coffee","Spiced rum","Water","Espresso","Angelica root","Orange","Cranberries","Johnnie Walker","Apple cider","Everclear","Cranberry juice","Egg yolk","Egg","Grape juice","Peach nectar","Lemon","Firewater","Lemonade","Lager","Whiskey","Absolut Citron","Pisco","Irish cream","Ale","Chocolate liqueur","Midori melon liqueur","Sambuca","Cider","Sprite","7-Up","Blackberry brandy","Peppermint schnapps","Creme de Cassis","Jack Daniels","Bailey's irish cream","151 proof rum","Absolut Vodka","Goldschlager","Crown Royal","Cointreau","Vermouth","Advocaat","Absolut Kurant","Beer","Kool-Aid","Cherry Heering","White Creme de Menthe","Malibu rum","Vanilla vodka","Jägermeister","Kiwi liqueur","Grand Marnier","Cachaca","Peachtree schnapps","Wild Turkey","Cranberry vodka","Corona","Orange juice","Yukon Jack","Chocolate ice-cream","Coconut rum","Banana liqueur","Black Sambuca","Hot Damn","Mint","Campari","Ice","Sour mix","Absinthe","Whisky","Guinness stout","Vanilla ice-cream","Chambord raspberry liqueur","Jim Beam","Godiva liqueur","Fruit punch","Baileys irish cream","Zima","Blue Curacao","Coca-Cola","Maui","Frangelico","Bacardi Limon","Raspberry vodka","Green Creme de Menthe","Lemon peel","Prosecco","White Rum","Mezcal","Green Chartreuse","Grape Soda","Hot Chocolate","Blended Scotch","Rye whiskey"]
var names = ["A Furlong Too Late","A Night In Old Mandalay","Abbey Cocktail","Acapulco","Adam","Adonis Cocktail","Affair","Affinity","After Dinner Cocktail","After Supper Cocktail","Alabama Slammer","Alaska Cocktail","Alexander","Brandy Alexander","Alfie Cocktail","Algonquin","Allegheny","Allies Cocktail","Almeria","Almond Joy","Amaretto And Cream","Amaretto Mist","Amaretto Rose","Amaretto Stinger","Amaretto Tea","Angel Face","Applecar","Apricot Lady","Archbishop","Arise My Love","Arthur Tompkins","Artillery","Balmoral","Banana Daiquiri","Derby","Bermuda Highball","Black Russian","Old Fashioned","Blackthorn","Bloody Maria","Bloody Mary","Blue Lagoon","Blue Margarita","Blue Mountain","Bluebird","Bobby Burns Cocktail","Boomerang","Boston Sidecar","Boston Sour","Classic Old-Fashioned","Bourbon Sling","Bourbon Sour","Boxcar","Brandy Cobbler","Brandy Flip","Brandy Sour","Caipirinha","California Lemonade","Casa Blanca","Casino Royale","Champagne Cocktail","Cherry Rum","Chicago Fizz","Chocolate Black Russian","City Slicker","Clove Cocktail","Dark Caipirinha","Cuba Libre","Daiquiri","Dragonfly","Dry Rob Roy","Dubonnet Cocktail","English Highball","English Rose Cocktail","Flying Dutchman","Flying Scotchman","French '75'","Frisco Sour","Frozen Daiquiri","Frozen Mint Daiquiri","Frozen Pineapple Daiquiri","Gin And Tonic","Gin Cooler","Gin Daisy","Gin Fizz","Gin Sling","Gin Smash","Gin Sour","Gin Swizzle","Gin Toddy","Godchild","Godfather","Godmother","Grass Skirt","Harvey Wallbanger","Havana Cocktail","Hawaiian Cocktail","Highland Fling Cocktail","Imperial Fizz","Irish Spring","Jack Rose Cocktail","Japanese Fizz","Jewel Of The Nile","John Collins","Kamikaze","Kentucky B And B","Kentucky Colonel","Loch Lomond","London Town","Lone Tree Cocktail","Lone Tree Cooler","Long Island Tea","Lord And Lady","Mai Tai","Martinez Cocktail","Martini","Midnight Cowboy","Mississippi Planters Punch","Monkey Wrench","New York Sour","Orange Oasis","Pink Gin","Pink Lady","Poppy Cocktail","Port And Starboard","Port Wine Cocktail","Port Wine Flip","Quaker's Cocktail","Quarter Deck Cocktail","Queen Bee","Queen Charlotte","Queen Elizabeth","Quentin","Royal Fizz","Royal Gin Fizz","Rum Cobbler","Rum Cooler","Rum Milk Punch","Rum Old-fashioned","Rum Screwdriver","Rum Sour","Rum Toddy","Rusty Nail","Salty Dog","Sazerac","Scooter","Scotch Cobbler","Scotch Sour","Screwdriver","Shanghai Cocktail","Sherry Eggnog","Sherry Flip","Sidecar","Sidecar Cocktail","Singapore Sling","Sloe Gin Cocktail","Sol Y Sombra","Stone Sour","Strawberry Daiquiri","Strawberry Margarita","Tequila Fizz","Tequila Sour","Thriller","Tom Collins","Turf Cocktail","Tuxedo Cocktail","Valencia Cocktail","Van Vleet","Vermouth Cassis","Vesuvio","Veteran","Victor","Victory Collins","Vodka And Tonic","Waikiki Beachcomber","Whiskey Sour","Whisky Mac","White Russian","Afterglow","Alice Cocktail","Apple Karate","Bora Bora","Orangeade","Rail Splitter","Banana Milk Shake","Banana Strawberry Shake","Banana Strawberry Shake Daiquiri-type","Egg Cream","Fruit Cooler","Fruit Flip-Flop","Fruit Shake","Just a Moonmint","Lassi - A South Indian Drink","Lassi Khara","Lassi Raita","Lassi - Sweet","Lassi - Mango","Lemouroudji","Limeade","Imperial Cocktail","Banana Cantaloupe Smoothie","Apple Berry Smoothie","Grape lemon pineapple Smoothie","Kiwi Papaya Smoothie","Mango Orange Smoothie","Pineapple Gingerale Smoothie","Kill the cold Smoothie","Strawberry Shivers","Sweet Bananas","Tomato Tang","Yoghurt Cooler","Castillian Hot Chocolate","Chocolate Beverage","Chocolate Drink","Drinking Chocolate","Hot Chocolate to Die for","Microwave Hot Cocoa","Nuked Hot Chocolate","Orange Scented Hot Chocolate","Spanish chocolate","Lemon Shot","Sex on the Beach","AutodafÃ©","Gagliardo","Surf City Lifesaver","Grizzly Bear","Karsk","Happy Skipper","FrappÃ©","Iced Coffee","Iced Coffee Fillip","Masala Chai","Melya","Spiking coffee","Thai Coffee","Thai Iced Coffee","Thai Iced Tea","Absinthe #2","Amaretto Liqueur","Angelica Liqueur","Caribbean Orange Liqueur","Coffee Liqueur","Coffee-Vodka","Cranberry Cordial","Creme de Menthe","Irish Cream","Clover Club","Scottish Highland Liqueur","Tia-Maria","Aloha Fruit punch","Apple Cider Punch #1","Artillery Punch","Berry Deadly","Cranberry Punch","Egg Nog #4","Egg-Nog - Classic Cooked","Egg Nog - Healthy","Gluehwein","Holloween Punch","Mulled Wine","Sangria #1","Sweet Sangria","Sangria - The World's Best","Spiced Peach Punch","Strawberry Lemonade","Sunny Holiday Punch","Wine Cooler","Wine Punch","Margarita","Bruce's Puce","Brave Bull Shooter","Fahrenheit 5000","Popped cherry","Atomic Lokade","Diesel","Afternoon","Kool-Aid Shot","National Aquarium","Damned if you do","Long vodka","Quick F**K","Owen's Grandmother's Revenge","Flaming Dr. Pepper","New York Lemonade","Caipirissima","Pisco Sour","Big Red","Moscow Mule","Black & Tan","Chocolate Milk","B-53","Sea breeze","Snake Bite (UK)","Bob Marley","Brainteaser","Atlantic Sun","Mojito","Green Goblin","Oreo Mudslide","ABC","Pink Panty Pulldowns","Ice Pick #1","410 Gone","Tequila Sunrise","Screaming Orgasm","Flander's Flake-Out","Apple Slammer","Ipamena","Amaretto Sour","Cuba Libra","Jelly Bean","After Five","Midnight Manx","Kir Royale","Manhattan","Jackhammer","Nutty Irishman","3 Wise Men","Miami Vice","AT&T","69 Special","Irish Coffee","Kir","'57 Chevy with a White License Plate","Mother's Milk","Zippy's Revenge","Belgian Blue","Red Snapper","Jamaica Kiss","Absolut Summertime","Cosmopolitan Martini","Ziemes Martini Apfelsaft","Vodka Martini","Cafe Savoy","Snowball","Mocha-Berry","747","Addison Special","California Root Beer","Amaretto Stone Sour","Blind Russian","Absolut Sex","Aztec Punch","Lemon Drop","Absolut limousine","Absolut Evergreen","Lunch Box","Aviation","Kool-Aid Slammer","Kurant Tea","Dirty Nipple","Darkwood Sling","Bailey's Dream Shake","Bumble Bee #1","A.D.M. (After Dinner Mint)","A Splash of Nash","Amaretto Sunrise","Arizona Stingers","Orange Push-up","151 Florida Bushwacker","Zizi Coin-coin","50/50","Tequila Surprise","Cream Soda","ACID","Arctic Fish","Grim Reaper","Freddy Kruger","Bubble Gum","Kiwi Lemon","Hot Creamy Bush","Midnight Mint","Talos Coffee","Girl From Ipanema","Zinger","Jello shots","Rum Punch","Turkeyball","Absolutely Cranberry Smash","Kiss me Quick","Royal Flush","Limona Corona","Pysch Vitamin Light","Apello","Texas Rattlesnake","After sex","San Francisco","Amaretto Shake","A Day at the Beach","Malibu Twister","Space Odyssey","Zenmeister","Avalon","252","3-Mile Long Island Iced Tea","Zorro","Orange Crush","155 Belmont","1-900-FUK-MEUP","Vodka Russian","Danbooka","110 in the shade","Grand Blue","Baby Eskimo","Tennesee Mud","Swedish Coffee","Negroni","Adam Sunrise","Absolut Stress #2","Chocolate Monkey","Texas Sling","A midsummernight dream","Zoksel","Fuzzy Asshole","Quick-sand","Snakebite and Black","Zimadori Zinger","Herbal flame","Jamaican Coffee","Mojito #3","Apricot punch","B-52","Barracuda","Zambeer","Americano","Bacardi Cocktail","Between The Sheets","Casino","Black Forest Shake","GG","Radler","Mudslinger","Campari Beer","Almond Chocolate Coffee","Amaretto Stone Sour #3","9 1/2 Weeks","Absolutly Screwed Up","Whitecap Margarita","Bellini Martini","Jitterbug","Moranguito","Amaretto Sweet & Sour","Rum Runner","H.D.","The Evil Blue Thing","Shark Attack","Jack's Vanilla Coke","Apple Grande","Bleeding Surgeon","Applejack","Adam Bomb","Arizona Antifreeze","Black and Brown","A Piece of Ass","Avalanche","Brandon and Will's Coke Float","Flaming Lamborghini","Zipperhead","A Gilligan's Island","Kioki Coffee","Apple Pie with A Crust","Zorbatini","Vodka Fizz","Radioactive Long Island Iced Tea","Shot-gun","Bible Belt","Irish Curdling Cow","Sweet Tooth","Downshift","Pink Penocha","Orange Whip","Bruised Heart","Jam Donut","Gideon's Green Dinosaur","A True Amaretto Sour","Kool First Aid","Irish Russian","Auburn Headbanger","Zima Blaster","Buccaneer","Homemade Kahlua","24k nightmare","Caribbean Boilermaker","Army special","Arizona Twister","Baby Guinness","Alice in Wonderland","501 Blue","Coke and Drops","Ruby Tuesday","Arctic Mouthwash","Brain Fart","Royal Bitch","Citrus Coke","Smut","Raspberry Cooler","Amaretto Sunset","Cherry Electric Lemonade","Dirty Martini","Duchamp's Punch","Mary Pickford","Monkey Gland","Paradise","Planter's Punch","Porto flip","Stinger","White Lady","Bellini","Butter Baby","Cosmopolitan","French 75","French Connection","Golden dream","Grasshopper","Hemingway Special","Horse's Neck","Long Island Iced Tea","Mimosa","Mint Julep","Pina Colada","Rose","Bramble","Dark and Stormy","Espresso Martini","French Martini","Russian Spring Punch","Spritz","Tommy's Margarita","Vampiro","Vesper","Yellow Bird","Boozy Snickers Milkshake","A1","Abbey Martini","Absolutely Fabulous","Ace","Adam & Eve","Addington","Addison","Adios Amigos Cocktail","Gin Rickey","Salted Toffee Martini","The Laverstoke","Bombay Cassis","Hunter's Moon","Zombie","Rosemary Blue","EmpellÃ³n Cocina's Fat-Washed Mezcal","The Last Word","French Negroni","Pegu Club","Corpse Reviver #2","Boulevardier","Greyhound","Paloma","Bijou","Gimlet","Martinez 2","Bahama Mama","Blue Hurricane","Oatmeal Cookie","Brigadier","Penicillin","The Jimmy Conway","Old Pal","Tipperary","Corn n Oil"]

function select(inp, arr)
{
    var currentFocus
    inp.addEventListener("input", function(e) 
    {
      // Close opened list 
      var selectionList, selection, value = this.value
      closeAllLists()
      if (!value) 
      { 
        return false
      }
      currentFocus = -1
      // Create the div with the options values
      selectionList = document.createElement("div")
      selectionList.setAttribute("id", this.id + "selection-list")
      selectionList.setAttribute("class", "selection-items")
      this.parentNode.appendChild(selectionList)
      for (i = 0; i < arr.length; i++)
      {
        if (arr[i].substr(0, value.length).toLowerCase() == value.toLowerCase())
        {
          // Put in bold the same letters in the option and in the input
          selection = document.createElement("DIV")
          selection.innerHTML = "<strong>" + arr[i].substr(0, value.length) + "</strong>"
          selection.innerHTML += arr[i].substr(value.length)
          selection.innerHTML += "<input type='hidden' value='" + arr[i] + "'>"
          selection.addEventListener("click", function(e) {
            inp.value = this.getElementsByTagName("input")[0].value
            closeAllLists()
          })
          selectionList.appendChild(selection)
        }
      }
    })
    // Select options with the arrow
    inp.addEventListener("keydown", function(e)
    {
        var x = document.getElementById(this.id + "selection-list")
        if (x) 
        {
          x = x.getElementsByTagName("div")
        }
        // Arrow down 
        if (e.keyCode == 40) 
        {
          currentFocus++
          addActive(x)
        } 
        // Arrow up
        else if (e.keyCode == 38) 
        {
          currentFocus--
          addActive(x)
        } 
        // Enter
        else if (e.keyCode == 13) 
        {
            if (x)
            {
              x[currentFocus].click()
            } 
        }
    })
    // Add the class active 
    function addActive(x)
    {
      if (!x) 
      {
        return false
      }
      removeActive(x)
      if (currentFocus >= x.length)
      {
        currentFocus = 0
      } 
      if (currentFocus < 0)
      {
        currentFocus = (x.length - 1)
      }
      x[currentFocus].classList.add("selection-active")
    }
    // Remove the class active
    function removeActive(x)
    {
      for (var i = 0 ;i < x.length ;i++)
      {
        x[i].classList.remove("selection-active")
      }
    }
    function closeAllLists(element)
    {
      var x = document.getElementsByClassName("selection-items")
      for (var i = 0 ;i < x.length ;i++)
      {
        if (element != x[i] && element != inp)
        {
        x[i].parentNode.removeChild(x[i])
      }
    }
  }
  document.addEventListener("click", function (e)
  {
      closeAllLists(e.target)
  })
  }

select(document.getElementById("selectIng"), ingredients)
select(document.getElementById("selectName"), names)

/**
 * Input values for multiple ingredients
 */

var selectIng = document.getElementById("selectIng")
var multIng = document.getElementById("multIng")

function addTag(e, selectIng, multIng)
{
  if(multIng.value == ''){
    multIng.value = `${selectIng.value}`
  }
  else if(selectIng.value == ''){
    e.preventDefault()
  }
  else{
    multIng.value = `${multIng.value},${selectIng.value}`
  }
}

function createTag(){
  var tag = document.createElement("span")
  tag.innerHTML = selectIng.value
  tag.classList.add("span")
  document.body.appendChild(tag)
  console.log(tag)
}

selectIng.addEventListener('keypress', (e) =>
{
  if(e.keyCode == 13 || e.keyCode == 32)
  {
    e.preventDefault();
    addTag(e, selectIng, multIng)
    createTag()
    selectIng.value = ""
  }
})


