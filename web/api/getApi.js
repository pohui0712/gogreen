const requestURL = `https://api.worldnewsapi.com/search-news?text-environment&api-key=006824b355564abe897d3ce4d502484d`;

fetch(requestURL)
  .then((res) => res.json())
  .then((data) => {
    const newsContainer = document.getElementById("news-container");

    data.article.forEach((article) => {
      const newsTitle = document.createElement("p");
      newsTitle.textContent = article.title;
      newsContainer.appendChild(newsTitle);
    });
  })
  .catch((error) => console.log(error));
