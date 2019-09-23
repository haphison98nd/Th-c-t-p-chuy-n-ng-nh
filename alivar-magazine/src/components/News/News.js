import React, {Component} from 'react';
import ItemNews from './ItemNews';
import Ads from '../Ads';
import DetailNews from './DetailNews';

class News extends Component {
    constructor(props){
        super(props);
        this.state = {
            itemSelected : null,
        }
        this.showDetailNew =  this.showDetailNew.bind(this);
    }

    showDetailNew(item){
        this.setState({
            itemChoose : item
        });
    }

    render(){
        
        let listnews= this.props.listnews;
        let isShowDetail = this.props.isShowDetail;
        let clickItemNews = this.props.clickItemNews;
        let itemSelected = this.showDetailNew;

        let itemChoose = this.state.itemChoose;

        
   
        if (isShowDetail === false) {
            return (
                <div className="row">
                {
                listnews.map(function(item, i){
                    if ( (i+1) % 3 === 0 && i !== 0 )
                    {
                        return <Ads key = {i} > </Ads>
                    }
                    else
                    {
                        return <ItemNews
                                    clickItemNews   = {clickItemNews}
                                    itemSelected    = {itemSelected}
                                    news            = {item} 
                                    key             = {i}
                                     >
                                </ItemNews>
                    }
                   })
                }
                </div>
            )
        }
        else
        {
            return (
                <DetailNews
                    itemChoose = {itemChoose}
                > 

                </DetailNews>
                );
        }
    }
}

export default News;
