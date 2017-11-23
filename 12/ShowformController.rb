Class ShowformController<ApplicationController
def form
end
def res
@book=Book.new
@book.ano = params[:accession_number]
@book.title=params[:title]
@book.author=params[:author]
@book.edition=params[:edition]
@book.publisher=params[:publisher]
@book.save
Redirect to :action=.’result’
end
def result
@allbooks=Book.find(:all)
end
Def search
@searchresults=Book.find(:all,:conditions =>[“title  =?”, params[:s]])
end
end
